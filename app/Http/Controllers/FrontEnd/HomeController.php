<?php

namespace App\Http\Controllers\FrontEnd;

use App\Slider;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $slides     = Slider::where('status',1)->get();
        $slides     = json_decode(\json_encode($slides),true);
        $products   = Product::orderBy('id','DESC')->get();
        $categories = Category::get();
        $categoryProduct = Category::where('parent_id',0)->get();
        
        $categoryProduct = json_decode(json_encode($categoryProduct),true);
        return view('frontend.home',compact('slides','products','categories','categoryProduct'));
    }
}
