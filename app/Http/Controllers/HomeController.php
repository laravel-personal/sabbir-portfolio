<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Home Page View.
     */
    function homePage(){
        return view('Home');
    }
}
