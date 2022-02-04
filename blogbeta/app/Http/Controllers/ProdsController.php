<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdsController extends Controller
{
    /////////// INDEX //////////////////////////////////////////////////
    public function index(){

        return view('products.index');
    }
    /////////// ABOUT ////////////////////////////////////////////////////
    public function about(){
        return 'About Us Page';
    }
    /////////// passar dados por COMPACT ////////////////////////////////////
    public function compact(){
        $title = "Welcome to my Laravel Learning";
        $desc = "Auto didata Hugo Resende @2022";

        return view('products.index', compact('title','desc'));
    }
}
