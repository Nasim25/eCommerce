<?php

namespace App\Http\Controllers\FrontEnd;

use App\Product;
use App\Section;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subcategory;

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

    public function product_by_category($product)
    {
        $sections = Section::where('status', 1)->get();
        $categories_product = Category::where('slug',$product)->first();
        return view('frontend.product_by_category',compact('sections','categories_product'));
    }
    public function product_by_subcategory($id)
    {
        $sections = Section::where('status', 1)->get();
        $subcategory_product = Subcategory::where('id',$id)->first();
        return view('frontend.product_by_subcategory',compact('subcategory_product','sections'));
    }
}
