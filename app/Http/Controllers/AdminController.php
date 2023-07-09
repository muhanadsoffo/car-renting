<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    function adminlogin(){
        if (Auth::check()){
            return redirect(route('admin.index'));
        }
        return view('admin.login');
    }

    function adminregister(){
        if (Auth::check()){
            return redirect(route('admin.index'));
        }
        return view('admin.register');
    }


    function adminloginpost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect('admin/index');
        } else {

            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    function adminregisterpost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required'
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user =Admin::create($data);
        if(!$user){
            return redirect(route('admin.register'))->with("error","Register failed,try again");
        }
        return redirect(route('admin.login'))->with("success","Registration completed successfully ,Login to reach your account");
    }
    function adminlogout(){
        Session::flush();
        Auth::logout();
        return redirect(route('admin.login'));
    }

}
