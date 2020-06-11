<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function deshboard()
    {
        return view('admin.deshboard');
    }

    public function setting()
    {
        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first();
        return view('admin.admin_settion',compact('adminDetails'));
    }

    public function checkpassword(Request $request)
    {
        $data = $request->all();
        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password))
        {
            echo 'true';
        }else{
            echo 'false';
        }
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
