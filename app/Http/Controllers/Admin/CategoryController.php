<?php

namespace App\Http\Controllers\Admin;

use Session;
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
            echo "Add";
        }else{
            echo "edit";
        }
        return view('admin.category.add_edit_category');
    }
}
