<?php

namespace App\Http\Controllers\FrontEnd;

use App\Slider;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subcategory;

class HomeController extends Controller
{
    public function home()
    {
        $slides     = Slider::where('status',1)->get();
        $slides     = json_decode(\json_encode($slides),true);
        $products   = Product::orderBy('id','DESC')->get();
        $categories = Category::with('products')->where('status',1)->get();
        
        
        $categories = json_decode(json_encode($categories),true);
        // echo "<pre>";print_r($categories);die;
        return view('frontend.home',compact('slides','products','categories'));
    }
}
