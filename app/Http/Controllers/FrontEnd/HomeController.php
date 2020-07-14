<?php

namespace App\Http\Controllers\FrontEnd;

use App\Brand;
use App\Slider;
use App\Product;
use App\Section;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $slides     = Slider::where('status', 1)->get();
        $slides     = json_decode(\json_encode($slides), true);
        $products   = Product::where('status', 1)->orderBy('id','DESC')->get();
        $categories = Category::with('products')->where('status', 1)->get();
        $sections = Section::where('status', 1)->get();
        $brands = Brand::where('status',1)->get();

        $categories = json_decode(json_encode($categories), true);
        // echo "<pre>";print_r($categories);die;
        return view('frontend.home', compact('slides', 'products', 'categories','sections','brands'));
    }

    public function about()
    {
        $sections = Section::where('status', 1)->get();
        return view('frontend.about',compact('sections'));
    }
}
