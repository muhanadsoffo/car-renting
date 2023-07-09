<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function profile(){

        return view('home.profile');
    }
    function login(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        return view('home.login');
    }


    function loginpost(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error","login details are not vaild");
    }


    function registerpost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',

        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user =User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error","Register faild,try again");
        }
        return redirect(route('login'))->with("sccuess","Registeration completed successfully ,Login to reach your account");
    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('home'));
    }
    function register(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        return view('home.register');
    }

}
