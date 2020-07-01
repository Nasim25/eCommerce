<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_view($product)
    {
        $product = Product::where('id',$product)->first();
        return view('frontend.product_view',compact('product'));
    }
}
