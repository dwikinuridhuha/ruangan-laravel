<?php

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

use App\hitung;

Route::get('/', 'CountController@index');

route::get('/blog', 'BlogController@index');
route::get('/blog/{id}', 'BlogController@show');

//api untuk sending data ke ionic
route::get('/api/data', function (){
    $data = hitung::all()->toJson();
    return response($data,200)->header('Content-Type', 'application/json');
});