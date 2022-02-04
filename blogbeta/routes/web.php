<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//////// VIEW USANDO O CONTROLLER PRODSCONTROLLER////////////////////////////////////
Route::get('/products', [ProdsController::class, 'index']);
Route::get('/products/about', [ProdsController::class, 'about']);
Route::get('/products/compact', [ProdsController::class, 'compact']);

//////// METODO 2 >laravel8  CONTROLLER PRODSCONTROLLER////////////////////////////////////
//Route::get('/products','App\Http\Controllers\ProdsController@index');

////  VIEW HOME /////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('home');
});

//// ROUTE THAT SENDS BACK A VIEW /////////////////////////////////////////
Route::get('/default', function () {
    return view('welcome');
    //return env('CREATOR_NAME');
});


///// ROUTE TO USERS --- String  /////////////////////////////////////////
Route::get('/users', function (){
    return 'Welcome to the users page ! ';
});

///// ROUTE TO USERS --- Array(JSON)  /////////////////////////////////////////
Route::get('/users', function (){
    return ['PHP','HTML','CSS','LARAVEL'];
});
 
///// ROUTE TO USERS --- JSON object  /////////////////////////////////////////
Route::get('/users', function (){
    return response()->json([
        'name'=>'Hugo',
        'couse'=>'Laravel Iniciantes',
        'VERSION' => 33
    ]);
});

///// ROUTE TO USERS --- function  /////////////////////////////////////////
Route::get('/users', function() {
    return redirect('/');
});