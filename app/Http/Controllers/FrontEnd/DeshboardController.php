<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Support\Facades\Auth;
use App\Shipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        
        echo "<pre>";print_r($shipping);die;
    }

    public function payment()
    {
        return view('frontend.checkout.payment');
    }
}
