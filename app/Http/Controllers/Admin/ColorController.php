<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Color;
use App\Imports\ColorImport;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ColorController extends Controller
{
    public function index()
    {
        Session::put('page','color');

        $colors = Color::latest()->get();
        return view('admin.color.index',compact('colors'));
    }

    public function create()
    {
        return view('admin.color.create');
    }

    public function color_store(Request $request)
    {
        $request->validate([
            'color_name' => 'required|unique:colors',
            'color_code' => 'required',
        ]);

        $colors = new Color();
        $colors->color_name = $request->color_name;
        $colors->color_code = $request->color_code;
        $colors->save();

        return redirect('admin/color');
    }

    public function color_import(Request $request)
    {
        $request->validate([
            'color_excel' => 'required',
        ]);

        Excel::import(new ColorImport, $request->color_excel);

        return redirect('admin/color');
    }

    public function color_delete($id)
    {
        Color::find($id)->delete();

        return redirect()->back();
    }
}
