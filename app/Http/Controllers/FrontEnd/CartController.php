<?php

namespace App\Http\Controllers\FrontEnd;

use auth;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Egulias\EmailValidator\Validation\Exception\EmptyValidationList;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $data = $request->all();
        $product = Product::where('id', $data['product_id'])->first();

        Cart::setGlobalTax(0);
        if (!empty($product)) {
            Cart::add([
                'id'    => $product->id,
                'qty'   => $data['qty'],
                'price' => $product->product_price,
                'name'  => $product->product_name,
                'weight' => 550,
                'options'    => [
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

    public function cart_item_update(Request $request)
    {   
        $rowId = $request->rowId;
        if($request->isMethod('post'))
        {
            Cart::update($rowId, ['qty' => $request->qty]);
             return redirect()->back();

        }

        return redirect()->back();
        
        
    }
    public function cart_item_delete($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function checkout()
    {
        if(auth()->user())
        {
            return redirect(route('shipping'));
        }else{
            return redirect(route('customer.login'));
        }
    }

    
    
}
