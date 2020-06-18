<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product_list()
    {
        Session::put('page','product');
        $products = Product::with(['category','section'])->get();
        $products = json_decode(json_encode($products));
        return view('admin.product.product_list')->with(compact('products'));
    }
    public function product_update_status(Request $request)
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

            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=>$data['product_id']]);
        }
    }
}
