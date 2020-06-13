<?php

namespace App\Http\Controllers\Admin;

use App\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function section_list()
    {
        $sections = Section::get();
        return view('admin.section.section_list',compact('sections'));
    }
}
