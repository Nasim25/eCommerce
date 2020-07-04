<?php

namespace App\Http\Controllers\Admin;

use Image;
use Session;
use App\Brand;
use App\Product;
use App\Section;
use App\Category;
use App\ProductAttribute;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\ProductColor;
use App\ProductImage;

class ProductController extends Controller
{
    public function product_list()
    {
        Session::put('page','product');
        $products = Product::with('category','subcategory')->get();
        $products = json_decode(json_encode($products));
        return view('admin.product.product_list')->with(compact('products'));
    }
    public function product_update_status(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            if($data['status'] == "Active")
            {
                $status = 0;
            }else{
                $status = 1;
            }

            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=>$data['product_id']]);
        }
    }

    public function add_edit_product(Request $request,$id=NULL)
    {
        if($id=="")
        {
            $product = new Product();
        }else{
            echo "edit Product";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            $rules=[
                'category_id'   =>  'required',
                'product_name'  =>  'required',
                'product_code'  =>  'required|regex:/^[\w-]*$/',
                'product_price' =>  'required|numeric',
                'main_image'    =>  'image',
            ];
            $customeMessage=[
                'category_id.required'    =>'Category is required',
                'product_name.reges'       =>'Valid product name is required',
                'product_code.required'       =>'Product code is required',
                'product_code.regex'              =>'Valid Product code is required',
                'product_price.required'      =>'Product Price is required',
                'product_price.numeric'      =>'Valid Product Price is required',
                'main_image.image'      =>'Valid Product image is required',
            ];
            $this->validate($request,$rules,$customeMessage);
            

            
            if(empty($data['meta_title']))
            {
                $data['meta_title'] = "";
            }
            if(empty($data['meta_description']))
            {
                $data['meta_description'] = "";
            }
            if(empty($data['meta_keywords']))
            {
                $data['meta_keywords'] = "";
            }
            if(empty($data['description']))
            {
                $data['description'] = 0;
            }
            if(empty($data['product_descount']))
            {
                $data['product_descount'] = 0;
            }
            // product image
            if($request->hasFile('main_image'))
            {
                $image_temp = $request->file('main_image');
                if($image_temp->isValid()){
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111,999999).'-'.time().'.'.$extention;
                    $imagePath = 'public/image/product/main_image/'.$imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    Image::make($image_temp)->resize(600,300)->save($imagePath);
                    // save image to database
                    $product->main_image = $imagePath;
                }
            }else{
                $product->main_image = 'image/noimage.png';
            }
            // Save Product details in product table
             // product image
             if($request->hasFile('main_image'))
             {
                 $image_temp = $request->file('main_image');
                 if($image_temp->isValid()){
                     // Get Image Extention
                     $extention = $image_temp->getClientOriginalExtension();
                     $imageName = rand(111,999999).'-'.time().'.'.$extention;
                     $imagePath = 'public/image/product/'.$imageName;
                     // upload image
                     Image::make($image_temp)->save($imagePath);
                     Image::make($image_temp)->resize(800,800)->save($imagePath);
                     // save image to database
                     $product->view_image = $imagePath;
                 }
             }else{
                 $product->view_image = 'image/view_noimage.png';
             }
             // Save Product details in product table
            
            $product->subcategory_id    = $data['subcategory_id'];
            $product->category_id       = $data['category_id'];
            $product->brand_id          = $data['brand_id'];
            $product->product_name      = $data['product_name'];
            $product->product_slug      = Str::slug($data['product_name']);
            $product->product_code      = $data['product_code'];
            $product->product_price     = $data['product_price'];
            $product->product_descount  = $data['product_descount'];
            $product->description       = $data['description'];
            $product->meta_title        = $data['meta_title'];
            $product->meta_description  = $data['meta_description'];
            $product->meta_keywords     = $data['meta_keywords'];
            $product->is_featured       = $data['is_featured'];
            $product->status            = 1;
            $product->save();

            if(!empty($data['product_color'])){
                foreach($data['product_color'] as $color)
                {
                    $colors = new ProductColor();
                    $colors->product_id = $product->id;
                    $colors->color = $color;
                    $colors->save();
                }
            }
            
            Session::flash('success_message','Product Added Successfully!');
            return redirect('admin/product');
        }

        $colors = array('Black','White','Red');

        $category = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        // echo "<pre>";print_r($category);die;
        return view('admin.product.add_product')->with(compact('category','brands','colors'));
        
    }

    public function add_attributes(Request $request,$id=NULL)
    {
        
        if($request->isMethod('post'))
        {
            $product_image = new ProductImage();
            $data = $request->all();
            if($request->hasFile('product_image'))
            {
                $image_temp = $request->file('product_image');
                if($image_temp->isValid()){
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111,999999).'-'.time().'.'.$extention;
                    $imagePath = 'public/image/product/product_image/'.$imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    Image::make($image_temp)->resize(800,800)->save($imagePath);
                    // save image to database
                    
                    $product_image->product_image = $imagePath;
                }
            }else{
                $product_image->product_image = 'image/noimage.png';
            }

            $product_image->product_id = $data['product_id'];
            $product_image->status = 1;
            $product_image->save();
            return redirect()->back();
        }

        $productDetails = Product::with('productImages')->where('id',$id)->first();
        return view('admin.product.attributes',compact('productDetails'));
    }

    public function delete_attributes($id)
    {
        ProductAttribute::where('id',$id)->delete();
        return redirect()->back();
    }
}
