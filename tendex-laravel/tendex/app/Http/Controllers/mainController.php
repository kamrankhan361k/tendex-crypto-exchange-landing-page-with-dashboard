<?php

namespace App\Http\Controllers;

// model
use App\Models\Admin;
// hash password
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class mainController extends Controller
{
    function register()
    {
        return view("pages.signup");
    }
    function login()
    {
        return view("pages.signin");
    }
    // register
    function save(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);
        // save
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();
        if($save){
            return back()->with('success','New User has been successfuly added to database');
            // return redirect('otp-1');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    // login
    function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $userInfo = Admin::where("email","=",$request->email)->first();
        if (!$userInfo) {
            return back()->with("fail","We do not recognize your email address");
        }else{
         
            if(Hash::check($request->password,$userInfo->password)){
                $url = substr(url()->full(), -4, 4);
                $index = 'dashboard';
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect($index);
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

  
    function logout(){
        $url = substr(url()->full(), -4, 4);
        $signin = 'signin';
        $signup = 'signup';
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect($signin);
        }
    }
}