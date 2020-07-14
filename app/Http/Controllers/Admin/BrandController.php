<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
class BrandController extends Controller
{
    public function index()
    {
        Session::put('page','brand');
        $brands = Brand::get();
        return view('admin.brand.index',compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create_brand');
    }

    public function brand_store(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $brand = new Brand();


            if($request->hasFile('brand_image'))
            {
                $image_temp = $request->file('brand_image');
                if($image_temp->isValid()){
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111,999999).'-'.time().'.'.$extention;
                    $imagePath = 'public/image/brand/'.$imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    Image::make($image_temp)->resize(166,110)->save($imagePath);
                    // save image to database
                    $brand->brand_image = $imagePath;
                }
            }else{
                $brand->brand_image = 'image/noimage.png';
            }

            $brand->brand_name = $data['brand_name'];
            $brand->save();


            Session::flash('success_message','Brand Added Successfully!');
            return redirect('admin/brand');


        }

    }
}
