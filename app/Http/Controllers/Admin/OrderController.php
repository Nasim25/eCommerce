<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Session;
class OrderController extends Controller
{
    public function index()
    {
        Session::put('page','order');
        $order = Order::get();
        return view('admin.order.index',compact('order'));
    }

    public function index_details(Request $request, $id)
    {
        $order = Order::where('id',$id)->first();
        $orderDetails = OrderDetail::where('order_id',$order->id)->get();
        return view('admin.order.order_details',compact('order','orderDetails'));
    }
}
