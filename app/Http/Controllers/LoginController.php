<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }

    function checkLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:5',
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('/leaderboard');
        }else{
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function successLogin(){
     return view('leaderboard');
    }

    function logout()
    {
     Auth::logout();
     return redirect('/');
    }
}
