<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{

    public function section_list()
    {   
        if(Auth::guard('admin')->user()->type != 1)
        {
            return redirect('admin/deshboard');
        }

            Session::put('page','sections');
            $sections = Section::orderBy('name')->get();
            return view('admin.section.section_list',compact('sections'));
        
    }

    public function section_update_status(Request $request)
    {
        if(Auth::guard('admin')->user()->type != 1)
        {
            return redirect('admin/deshboard');
        }

        if($request->ajax())
        {
            $data = $request->all();
            if($data['status'] == "Active")
            {
                $status = 0;
            }else{
                $status = 1;
            }

            Section::where('id',$data['section_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'section_id'=>$data['section_id']]);
        }
    }

    public function section_add()
    {
        if(Auth::guard('admin')->user()->type != 1)
        {
            return redirect('admin/deshboard');
        }

        return view('admin.section.add_section');
    }

    public function section_store(Request $request)
    {
        if(Auth::guard('admin')->user()->type != 1)
        {
            return redirect('admin/deshboard');
        }
        
       $request->validate([
            'name' => 'required|unique:sections',
        ]);

        $section = new Section();
        $section->name = $request->name;
        $section->save();
        return redirect('admin/section');
    }
}
