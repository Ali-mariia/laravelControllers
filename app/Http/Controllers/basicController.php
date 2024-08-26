<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    public function index(){
        return view ('home');
    
}
public function about(){
    return view ('about');

}
public function service(){
    return view ('service');

}

    
}
