<?php

namespace App\Http\Controllers\FrontEnd;

use App\Product;
use App\Section;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product_view($product)
    {
        $product = Product::where('id',$product)->first();

        $categories = Category::with('products')->where('status', 1)->get();
        $sections = Section::where('status', 1)->get();

        $categories = json_decode(json_encode($categories), true);
        return view('frontend.product_view',compact('product','categories','sections'));
    }
}
