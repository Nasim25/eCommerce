<?php

namespace App\Http\Controllers\Admin;

use Image;
use Session;
use App\Brand;
use App\Product;
use App\Section;
use App\Category;
use App\Color;
use App\ProductAttribute;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\ProductColor;
use App\ProductImage;
use App\Subcategory;

class ProductController extends Controller
{
    public function product_list()
    {
        Session::put('page', 'product');
        $products = Product::with('category', 'subcategory')->get();
        $products = json_decode(json_encode($products));
        return view('admin.product.product_list')->with(compact('products'));
    }
    public function product_update_status(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }

            Product::where('id', $data['product_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'product_id' => $data['product_id']]);
        }
    }

    public function add_edit_product(Request $request, $id = NULL)
    {
        if ($id == "") {
            $title = "Add Product";
            $productOld = new Product();
        } else {
            $title = "Edit Product";
            $productOld = Product::where('id',$id)->first();

        }

        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'category_id'   =>  'required',
                'subcategory_id'   =>  'required',
                'product_name'  =>  'required',
                'product_code'  =>  'required|regex:/^[\w-]*$/',
                'product_price' =>  'required|numeric',
                'main_image'    =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=294,height=247',
                'view_image'    =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=700,height=700',
            ];
            $customeMessage = [
                'category_id.required'    => 'Category is required',
                'subcategory_id.required'    => 'Subcategory is required',
                'product_name.reges'       => 'Valid product name is required',
                'product_code.required'       => 'Product code is required',
                'product_code.regex'              => 'Valid Product code is required',
                'product_price.required'      => 'Product Price is required',
                'product_price.numeric'      => 'Valid Product Price is required',
                'main_image.required'      => 'Product Main Image Required',
                'main_image.dimensions'      => 'Invalid Product image dimensions(width:294,height:247)',
                'view_image.dimensions'      => 'Product View Image Required',
                'view_image.dimensions'      => 'Invalid Product View image dimensions(width:700,height:700)',
            ];
            $this->validate($request, $rules, $customeMessage);



            if (empty($data['meta_title'])) {
                $data['meta_title'] = "";
            }
            if (empty($data['meta_description'])) {
                $data['meta_description'] = "";
            }
            if (empty($data['meta_keywords'])) {
                $data['meta_keywords'] = "";
            }
            if (empty($data['description'])) {
                $data['description'] = 0;
            }
            if (empty($data['product_descount'])) {
                $data['product_descount'] = 0;
            }
            // product image
            if ($request->hasFile('main_image')) {
                $image_temp = $request->file('main_image');
                if ($image_temp->isValid()) {
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = Str::slug($data['product_code']) . '-' . rand(111, 999999) . '-' . time() . '.' . $extention;
                    $imagePath = 'public/image/product/main_image/' . $imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    // save image to database
                    $productOld->main_image = $imagePath;
                }
            } else {
                $productOld->main_image = 'image/noimage.png';
            }

            // product view image
            if ($request->hasFile('view_image')) {
                $image_temp = $request->file('view_image');
                if ($image_temp->isValid()) {
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111, 999999) . '-' . time() . '.' . $extention;
                    $imagePath = 'public/image/product/' . $imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    // save image to database
                    $productOld->view_image = $imagePath;
                }
            } else {
                $productOld->view_image = 'image/view_noimage.png';
            }
            // Save Product details in product table

            $productOld->subcategory_id    = $data['subcategory_id'];
            $productOld->category_id       = $data['category_id'];
            $productOld->brand_id          = $data['brand_id'];
            $productOld->product_name      = $data['product_name'];
            $productOld->product_slug      = Str::slug($data['product_name']);
            $productOld->product_code      = $data['product_code'];
            $productOld->product_price     = $data['product_price'];
            $productOld->product_descount  = $data['product_descount'];
            $productOld->description       = $data['description'];
            $productOld->meta_title        = $data['meta_title'];
            $productOld->meta_description  = $data['meta_description'];
            $productOld->meta_keywords     = $data['meta_keywords'];
            $productOld->is_featured       = $data['is_featured'];
            $productOld->status            = 1;
            $productOld->save();

            if (!empty($data['product_color'])) {
                foreach ($data['product_color'] as $color) {
                    $colors = new ProductColor();
                    $colors->product_id = $product->id;
                    $colors->color = $color;
                    $colors->save();
                }
            }

            Session::flash('success_message', 'Product Added Successfully!');
            return redirect('admin/product');
        }

        $colors = Color::orderBy('color_name')->get();

        $category = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $subcategories = Subcategory::get();
        // echo "<pre>";print_r($category);die;
       
        return view('admin.product.add_product')->with(compact('subcategories','title','category', 'brands', 'colors', 'productOld'));
        
        
    }

    public function add_attributes(Request $request, $id = NULL)
    {

        if ($request->isMethod('post')) {

            $rules = [
                'product_image'    =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=700,height=700',
            ];
            $customeMessage = [
                'product_image.dimensions'      => 'Product View Image Required',
                'product_image.dimensions'      => 'Invalid Product View image dimensions(width:700,height:700)',
            ];

            $this->validate($request, $rules, $customeMessage);
            $product_image = new ProductImage();
            $data = $request->all();
            if ($request->hasFile('product_image')) {
                $image_temp = $request->file('product_image');
                if ($image_temp->isValid()) {
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111, 999999) . '-' . time() . '.' . $extention;
                    $imagePath = 'public/image/product/product_image/' . $imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    // save image to database

                    $product_image->product_image = $imagePath;
                }
            } else {
                $product_image->product_image = 'image/noimage.png';
            }

            $product_image->product_id = $data['product_id'];
            $product_image->status = 1;
            $product_image->save();
            return redirect()->back();
        }

        $productDetails = Product::with('productImages')->where('id', $id)->first();
        return view('admin.product.attributes', compact('productDetails'));
    }

    public function delete_attributes($id)
    {
        $image = ProductImage::where('id', $id)->first();

        $image_path = $image->product_image; 

        if (file_exists($image_path)) {

            @unlink($image_path);
        }
        
        return redirect()->back();
    }
}
