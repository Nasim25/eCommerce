<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Section;
use App\Category;
use Illuminate\Http\Request;
use Image;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category_list()
    {
        Session::put('page','category');
        $categoris = Category::orderBy('category_name')->get();
        return view('admin.category.category_list',compact('categoris'));
    }
    public function category_update_status(Request $request)
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

            Category::where('id',$data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'category_id'=>$data['category_id']]);
        }
    }

    public function add_edit_category(Request $request,$id=NULL)
    {
        if($id =="")
        {
           
            $category = new Category();    
        }else{
            $category = Category::where('id',$id)->first();
        }
        if($request->isMethod('post')){
            $data = $request->all();

            $rules=[
                'category_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'section_id'    => 'required',
                'url'           => 'required',
                'category_image'=> 'image',
            ];
            $customeMessage=[
                'category_name.required'    =>'Name is required',
                'category_name.reges'       =>'Valid name is required',
                'section_id.required'       =>'Section is required',
                'url.required'              =>'URL is required',
                'category_image.image'      =>'Valid image is required'
            ];
            if($request->hasFile('category_image'))
            {
                $image_temp = $request->file('category_image');
                if($image_temp->isValid()){
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111,999999).'.'.$extention;
                    $imagePath = 'public/image/category_image/'.$imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    // save image to database
                    $category->category_image = $imageName;
                }
            }else{
                $category->category_image = 'default.png';
            }
            
            if(empty($data['description']))
            {
                $data['description'] ="";
            }
            if(empty($data['meta_title']))
            {
                $data['meta_title'] ="";
            }
            if(empty($data['meta_description']))
            {
                $data['meta_description'] ="";
            }
            if(empty($data['meta_keywords']))
            {
                $data['meta_keywords'] ="";
            }
            if(empty($data['url']))
            {
                $data['url'] ="";
            }
            if(empty($data['category_discount']))
            {
                $data['category_discount'] =0;
            }
            $category->parent_id = $data['parent_id'];
            $category->section_id = $data['section_id'];
            $category->category_name = $data['category_name'];
            $category->category_discount = $data['category_discount'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->meta_title = $data['meta_title'];
            $category->meta_description = $data['meta_description'];
            $category->meta_keywords = $data['meta_keywords'];
            $category->status = '1';
            $category->save();
        }
        $sections = Section::where('status',1)->orderBy('name')->get();
        return view('admin.category.add_edit_category',compact('sections'));
    }
}
