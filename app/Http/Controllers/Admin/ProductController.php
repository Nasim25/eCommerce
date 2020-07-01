<?php

namespace App\Http\Controllers\Admin;

use Image;
use Session;
use App\Product;
use App\Section;
use App\Category;
use App\ProductAttribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
                'product_name'  =>  'required|regex:/^[\w-]*$/',
                'product_code'  =>  'required|regex:/^[\w-]*$/',
                'product_price' =>  'required|numeric',
                'product_color' =>   'required|regex:/^[\pL\s\-]+$/u',
                'main_image'    =>  'image',
            ];
            $customeMessage=[
                'category_id.required'    =>'Category is required',
                'product_name.required'       =>'Product name is required',
                'product_name.reges'       =>'Valid product name is required',
                'product_code.required'       =>'Product code is required',
                'product_code.regex'              =>'Valid Product code is required',
                'product_price.required'      =>'Product Price is required',
                'product_price.numeric'      =>'Valid Product Price is required',
                'product_color.required'      =>'Product color is required',
                'product_color.regex'      =>'Valid Product color is required',
                'main_image.image'      =>'Valid Product image is required',
            ];
            $this->validate($request,$rules,$customeMessage);
            

            if(empty($data['fabric']))
            {
                $data['fabric'] = "";
            }
            if(empty($data['pattern']))
            {
                $data['pattern'] = "";
            }
            if(empty($data['sleeve']))
            {
                $data['sleeve'] = "";
            }
            if(empty($data['fit']))
            {
                $data['fit'] = "";
            }
            if(empty($data['occassion']))
            {
                $data['occassion'] = "";
            }
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
            if(empty($data['wash_care']))
            {
                $data['wash_care'] = "";
            }
            if(empty($data['product_weight']))
            {
                $data['product_weight'] = 0;
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
                    $imageName = rand(111,999999).'.'.$extention;
                    $imagePath = 'public/image/product_image/'.$imageName;
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
            
            $product->subcategory_id    = $data['subcategory_id'];
            $product->category_id       = $data['category_id'];
            $product->product_name      = $data['product_name'];
            $product->product_code      = $data['product_code'];
            $product->product_color     = $data['product_color'];
            $product->product_price     = $data['product_price'];
            $product->product_descount  = $data['product_descount'];
            $product->product_weight    = $data['product_weight'];
            $product->product_video     = "";
            $product->description       = $data['description'];
            $product->wash_care         = $data['wash_care'];
            $product->fabric            = $data['fabric'];
            $product->pattern           = $data['pattern'];
            $product->sleeve            = $data['sleeve'];
            $product->fit               = $data['fit'];
            $product->occassion         = $data['occassion'];
            $product->meta_title        = $data['meta_title'];
            $product->meta_description  = $data['meta_description'];
            $product->meta_keywords     = $data['meta_keywords'];
            $product->is_featured       = $data['is_featured'];
            $product->status            = 1;
            $product->save();

            Session::flash('success_message','Product Added Successfully!');
            return redirect('admin/product');
        }

        $fabricArray = array('Cottor','Polyester','Wool');
        $sleeveArray = array('full Sleeve','Half Sleeve','Short Sleeve','Sleeveless');
        $patternArray = array('Checked','Plain','Printed','Self','Solid');
        $fitArray = array('Reqular','Slim');
        $occasionArray = array('Casual','formal');

        $category = Category::where('status',1)->get();
        // echo "<pre>";print_r($category);die;
        return view('admin.product.add_product')->with(compact('fabricArray','sleeveArray','patternArray','fitArray','occasionArray','category'));
        
    }

    public function add_attributes(Request $request,$id=NULL)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            foreach($data['sku'] as $key => $value)
            {
                if(!empty($value))
                {
                    $attribute = new ProductAttribute();
                    $attribute->product_id = $data['product_id'];
                    $attribute->sku = $value;
                    $attribute->size = $data['size'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();
                }
            }
            return redirect()->back();
        }
        $productDetails = Product::where('id',$id)->first();
        $attributeDetails = ProductAttribute::get();
        return view('admin.product.attributes',compact('productDetails','attributeDetails'));
    }

    public function delete_attributes($id)
    {
        ProductAttribute::where('id',$id)->delete();
        return redirect()->back();
    }
}
