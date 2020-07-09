<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.customer.customer_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('shipping'));
        }else{
            Session::flash('login_error','Invalid email & password');
            return redirect()->back();
        }
    }
}
