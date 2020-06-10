<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
class AdminController extends Controller
{
    public function deshboard()
    {
        return view('admin.deshboard');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $role = [
                'email'     => 'required|email|max:255',
                'password'  => 'required',
            ];
            $custome = [
                'email.required'    => 'Email Address is required',
                'email.email'       => 'Valid Email Address required',
                'password.required' => 'Password is required',
            ];
            $this->validate($request,$role,$custome);
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']]))
            {
                return redirect('admin/deshboard');
            }else{
                Session::flash('login_error','Invalid email & password');
                return redirect()->back();
            }
        }
        return view('admin.admin_login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin');
    }
}
