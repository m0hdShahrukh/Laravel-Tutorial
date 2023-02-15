<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo/{name}/{id?}', function($name, $id = null){
//     //echo "<h1>Hello world!!</h1>";
//     //return view('demo');
//     // echo $name . " ";
//     // echo $id;
//     $data = compact('name', 'id');
//     print_r($data);
//     return view('demo')->with($data);
// });

// Route::post('/test', function(){
//     echo "testing the route";
// });

// Route::any('/test', function(){
//     echo "<h1>testing the route</h1>";
// });
Route::get('/home/{name?}/{id?}', function($name = null, $id = null){
    $demo = "<h1>MOHD SHAHRUKH</h1>";
    $data = compact('name', 'id', 'demo');
    return view('home')->with($data);
});
