<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
public function home(){
    return view('static_Pages/home');
}

public function  help(){
    return view('static_Pages/help');
}

public function  about(){
    return view('static_Pages/about');
}
}
