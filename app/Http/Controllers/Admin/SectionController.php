<?php

namespace App\Http\Controllers\Admin;

use App\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class SectionController extends Controller
{
    public function section_list()
    {   
        Session::put('page','sections');
        $sections = Section::orderBy('name')->get();
        return view('admin.section.section_list',compact('sections'));
    }

    public function section_update_status(Request $request)
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

            Section::where('id',$data['section_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'section_id'=>$data['section_id']]);
        }
    }

    public function section_add()
    {
        return view('admin.section.add_section');
    }

    public function section_store(Request $request)
    {
       $request->validate([
            'name' => 'required|unique:sections',
        ]);

        $section = new Section();
        $section->name = $request->name;
        $section->save();
        return redirect('admin/section');
    }
}
