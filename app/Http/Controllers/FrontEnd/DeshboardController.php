<?php

namespace App\Http\Controllers\FrontEnd;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\OrderDetail;
use App\Shipping;
use App\Payment;
use App\Order;
use Session;
class DeshboardController extends Controller
{
    public function shipping()
    {
        return view('frontend.checkout.shipping');
    }

    public function shipping_store(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => ['required','regex:/(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/'],
                'address' => 'required',
                'districts' => 'required',

            ]);
            $shipping = new Shipping();
            $shipping->name = $data['name'];
            $shipping->email = $data['email'];
            $shipping->phone = $data['phone'];
            $shipping->address = $data['address'];
            $shipping->districts = $data['districts'];
            $shipping->alternet_phone = $data['alternet_phone'];
            $shipping->state = $data['state'];
            $shipping->user_id = auth::user()->id;
            $shipping->save();

            Session::put('shipping_id',$shipping->id);
            return redirect(route('payment'));


        }
        
        return redirect()->back();
    }

    public function payment()
    {
        return view('frontend.checkout.payment');
    }

    public function payment_store(Request $request)
    {
        
        $request->validate([
            'payment_method' => 'required',
        ]);

        if($request->isMethod('post'))
        {

           
        $payment = new Payment();
        $payment->payment_method = $request->payment_method;
        $payment->transaction_id = $request->transaction_id;
        $payment->save();

        $order = new Order();
        $order->user_id = auth::user()->id;
        $order->shipping_id = Session::get('shipping_id');
        $order->payment_id = $payment->id;
        $order->order_total = Cart::total();
        $order->status = '0';
        $order->save();
        $cartContant = Cart::content();
        foreach($cartContant as $cart)
        {
            $orderdetails = new OrderDetail();
            $orderdetails->order_id = $order->id;
            $orderdetails->product_id = $cart->id;
            $orderdetails->color_id = $cart->options->color;
            $orderdetails->size = $cart->options->size;
            $orderdetails->quantity = $cart->qty;
            $orderdetails->save();
        }

        Cart::destroy();
        Session::flash('shipping_id');
        Session::put('order_success','Order send Successfully');
        return redirect(route('order.success'));

        }else{
            return redirect()->back();
        }

    }

    public function order_success()
    {
        
        return view('frontend.checkout.order_success');
    }

    
 
}
