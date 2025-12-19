<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home');    
    }

    public function tourPost()
    {
        return view('pages.tour-post');
    }

    public function tourJoin(){
        return view('pages.tour-join');
    }
}
