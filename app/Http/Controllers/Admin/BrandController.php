<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        Session::put('page','brand');
        $brands = Brand::get();
        return view('admin.brand.index',compact('brands'));
    }
}
