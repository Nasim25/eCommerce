<?php

namespace App\Http\Controllers\FrontEnd;

use Session;
use App\User;
use App\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function customer_login()
    {
        $sections = Section::where('status', 1)->get();
        return view('frontend.customer.customerlogin',compact('sections'));
    }
    public function customer_login_login(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Toastr::success('Successfully Login', 'success');
            return redirect(route('user.deshboard'));
        }else{
            Session::flash('login_error','Invalid email & password');
            Toastr::error('Did not match email and password', 'success');
            return redirect()->back();
        }
    }

    public function customer_register(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'  => 'required|unique:users',
            'mobile'  => 'required|unique:users',
            'password'  => 'required',
            'address'  => 'required',
        ]);
        $data = $request->all();
        if($request->isMethod('post'))
        {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->address = $request->address;
            $user->password = Hash::make($request->password); 
            $user->save();

            Session::put('register','Successfully Registration, Please try to login');
            Toastr::success('Registration Successfull', 'success');
            return redirect()->back();
        }
        
    }
    public function index()
    {
        $sections = Section::where('status', 1)->get();
        return view('frontend.customer.customer_login',compact('sections'));
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
