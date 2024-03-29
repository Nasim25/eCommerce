<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\User;
use App\Admin;
use App\Order;
use App\Product;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function deshboard()
    {
        Session::put('page','admin');
        $products = Product::where('status',1)->get();
        $categories = Category::get();
        $orders = Order::latest()->get();
        $subcategories = Subcategory::get();
        $users = Admin::get();
        $customer = User::get();
        $reviews = Review::latest()->get();
        return view('admin.deshboard',compact('products','orders','categories','subcategories','users','customer','reviews'));
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

    public function setting_update(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password))
            {
                if($data['new_password'] == $data['cofirmation'])
                {
                    Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=> Hash::make($data['new_password'])]);
                    Session::flash('success_message','Password has been update successfully');
                    return redirect()->back();
                }
            }else{
                Session::flash('error_message','new password and confirm password not match');
            }
        }
        Session::flash('error_message','current password in incorrect');
        return redirect()->back();
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
        return redirect('admin/login');
    }
    public function admin_list()
    {
        Session::put('page','admin_list');
        $users = Admin::orderBy('name')->get();
        return view('admin.admin.admin_list',compact('users'));
    }
}
