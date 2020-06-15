<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Section;
use App\Category;
use Illuminate\Http\Request;
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
            $category->parent_id = $data['parent_id'];
            $category->section_id = $data['section_id'];
            $category->category_name = $data['category_name'];
            $category->category_image = '1';
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
