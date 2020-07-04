<?php

namespace App\Http\Controllers\FrontEnd;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Egulias\EmailValidator\Validation\Exception\EmptyValidationList;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $data = $request->all();
        $product = Product::where('id', $data['product_id'])->first();
        if (!empty($product)) {
            Cart::add([
                'id'    => $product->id,
                'qty'   => $data['qty'],
                'price' => $product->product_price,
                'name'  => $product->product_name,
                'weight' => 550,
                'option'    => [
                    'color' => $data['product_color'],
                    'image' => $product->main_image,
                ]
            ]);
        }


        return redirect(route('cart'));
    }

    public function cart()
    {
        return view('frontend.cart');
    }
}
