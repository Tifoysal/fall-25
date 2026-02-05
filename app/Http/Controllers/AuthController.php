<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    

    public function loginForm()
    {
        return view('pages.login');   
    }


    public function loginSubmit(Request $request)
    {

       $credentials= $request->except('_token');

       if(Auth::attempt($credentials))
       {
            notify()->success('Login Successful');
            return redirect()->route('home');
       }

       return redirect()->back();



    }
}
