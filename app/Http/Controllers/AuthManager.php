<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class AuthManager extends Controller
{


function maglogin() {
    return view('Login');
}

function register() {
    return view('register');
}

function loginPost(Request $request) {
    $request->validate([
        'email'=> 'required',
        'password'=> 'required'
    ]);

    Alert::success('Log In Successfully', 'Order Accessories and Book for our Services Now!');

    $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('maglogin'))->with('error', 'Wrong credentials, please try again.');
}

function registerPost (Request $request) {
    $request->validate([
        'name'=> 'required',
        'email'=> 'required|email|unique:users',
        'password'=> 'required'
    ]);

    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);
    $user = user::create($data);

    if(!$user){
        return redirect(route('register'))->with('error', 'Registration Failed! Please input the right information.');
    }

    return redirect(route('maglogin'))->with('success', 'Credentials created! You may now proceed to login.');

}

function logout() {
    Session::flush();
    Auth::logout();

    return redirect(route('maglogin'));

}

}
