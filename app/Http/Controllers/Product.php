<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index(){
        //inserire controllor
    }
    public function series(){
        return view('series');
    }
    public function films(){
        return view('home');
    }


}
