<?php

namespace App\Http\Controllers\Admin;

use Image;
use Session;
use App\Section;
use App\Category;
use App\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category_list()
    {
        Session::put('page','category');
        // $categoris = Category::with(['section'=>function($query){
        //     $query->select('id','name');
        // }])->orderBy('category_name')->get();
        $categoris = Category::with(['section'])->orderBy('category_name')->get();
       $categoris = json_decode(json_encode($categoris));
        // echo "<pre>"; print_r($categoris);die;
        return view('admin.category.category_list')->with(compact('categoris'));
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
                'category_image'=> 'image',
            ];
            $customeMessage=[
                'category_name.required'    =>'Name is required',
                'category_name.reges'       =>'Valid name is required',
                'section_id.required'       =>'Section is required',
                'category_image.image'      =>'Valid image is required'
            ];
            $this->validate($request,$rules,$customeMessage);
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
                    Image::make($image_temp)->resize(600,300)->save($imagePath);
                    // save image to database
                    $category->category_image = $imagePath;
                }
            }else{
                $category->category_image = 'image/noimage.png';
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
            if(empty($data['category_discount']))
            {
                $data['category_discount'] =0;
            }
            
            $category->section_id = $data['section_id'];
            $category->category_name = $data['category_name'];
            $category->category_discount = $data['category_discount'];
            $category->description = $data['description'];
            $category->slug = Str::slug($data['category_name']);
            $category->meta_title = $data['meta_title'];
            $category->meta_description = $data['meta_description'];
            $category->meta_keywords = $data['meta_keywords'];
            $category->status = '1';
            $category->save();
            return redirect('admin/category');
        }
        $sections = Section::where('status',1)->orderBy('name')->get();
        return view('admin.category.add_edit_category',compact('sections'));
    }

    public function appand_subcategory(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $getSubcategory = Subcategory::where(['category_id'=>$data['category_id'],'subcategory_status'=>1])->get();
            // echo "<pre>"; print_r($getCategory);die;
            $getSubcategory = json_decode(json_encode($getSubcategory),true);
            return view('admin.product.appand_subcategory',compact('getSubcategory'));
        }
    }

    public function subcategory(Request $request)
    {
        Session::put('page','subcategory');
        $subcategories = Subcategory::get();
        return view('admin.subcategory.subcategory',compact('subcategories'));
    }
    public function add_subcategory(Request $request,$id=NULL)
    {
        if($id == "")
        {
            $subcategory = new Subcategory();
        }else{

        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            $rules=[
                'subcategory_name'  => 'required|regex:/^[\pL\s\-]+$/u',
                'category_id'       => 'required',
                'subcategory_image' => 'image',
            ];
            $customeMessage=[
                'subcategory_name.required'    =>'Name is required',
                'subcategory_name.reges'       =>'Valid name is required',
                'category_id.required'       =>'Category is required',
                'subcategory_image.image'      =>'Valid image is required'
            ];
            $this->validate($request,$rules,$customeMessage);
            if($request->hasFile('subcategory_image'))
            {
                $image_temp = $request->file('subcategory_image');
                if($image_temp->isValid()){
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111,999999).'.'.$extention;
                    $imagePath = 'public/image/sebcategory_image/'.$imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    // save image to database
                    $subcategory->subcategory_image = $imagePath;
                }
            }else{
                $subcategory->subcategory_image = 'image/noimage.png';
            }

            if(empty($data['subcategory_discription']))
            {
                $data['subcategory_discription'] ="";
            }
            if(empty($data['subcategory_meta_title']))
            {
                $data['subcategory_meta_title'] ="";
            }
            if(empty($data['subcategory_meta_discription']))
            {
                $data['subcategory_meta_discription'] ="";
            }
            if(empty($data['subcategory_meta_keyword']))
            {
                $data['subcategory_meta_keyword'] ="";
            }
            if(empty($data['subcategory_discount']))
            {
                $data['subcategory_discount'] =0;
            }
            $subcategory->category_id  = $data['category_id'];
            $subcategory->subcategory_name  = $data['subcategory_name'];
            $subcategory->subcategory_discription  = $data['subcategory_discription'];
            $subcategory->subcategory_discount  = $data['subcategory_discount'];
            $subcategory->subcategory_meta_title  = $data['subcategory_meta_title'];
            $subcategory->subcategory_meta_discription  = $data['subcategory_meta_discription'];
            $subcategory->subcategory_meta_keyword  = $data['subcategory_meta_keyword'];
            $subcategory->subcategory_status  = 1;
            $subcategory->save();

        }
        $getCategories = Category::get();
        $getCategories = json_decode(json_encode($getCategories),true);
        return view('admin.subcategory.add_subcategory',compact('getCategories'));
    }
}
