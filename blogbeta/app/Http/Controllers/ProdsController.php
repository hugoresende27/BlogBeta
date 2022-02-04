<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdsController extends Controller
{
    /////////// INDEX ////////////////////////////////////////////////////////////////////
    public function index(){

        print_r(route('prods'));
        return view('products.index');
    }
    /////////// ABOUT ////////////////////////////////////////////////////////////////////
    public function about(){
        echo '<a href="/products">back</a><hr>';
        return 'About Us Page'; 
    }
    /////////// passar dados por COMPACT //////////////////////////////////////////////////
    public function compact(){
        $title = "Welcome to my Laravel Learning";
        $desc = "Auto didata Hugo Resende @2022";

        return view('products.index', compact('title','desc'));
    }
    /////////// passar dados por WITH //////////////////////////////////////////////////
    public function with(){

        $string_a_passar = "Olá Hugo string nova";

        return view('products.index')->with('var_da_blade', $string_a_passar);

    }
    /////////// passar dados por WITH2 passar um array ////////////////////////////////////
    public function with2(){

        $data = [
            'prod1' => 'Iphone',
            'prod2' => 'Samsung',
        ];
        
        return view('products.index')->with('dados', $data);
    }
    /////////// passar dados por diretamente no return ////////////////////////////////////
    public function with3(){

        $data = [
            'prod1' => 'Iphone',
            'prod2' => 'Samsung',
        ];
        
        return view('products.index',[
            'dados' => $data
        ]);
    }
    /////////// FUNÇÃO SHOW ///////////////////////////////////////////////////////////
    public function show($id) {
        return $id;
    }
    /////////// FUNÇÃO SHOW2 ///////////////////////////////////////////////////////////
    public function show2($name) {
        
        $data = [
            'iphone' => 'Novo',
            'samsung' => 'Samsung',
            9 => 99
        ];
        return view('products.index', [
            'prods' => $data[$name] ?? 'Product '. $name.' does not exist'
        ]);
    }
}
