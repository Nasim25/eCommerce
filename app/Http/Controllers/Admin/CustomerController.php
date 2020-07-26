<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function customer_list()
    {
        Session::put('page','customer');
        $customers = User::latest()->get();
        return view('admin.customer.customer_list',compact('customers'));
    }

}
