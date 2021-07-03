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

Route::get('/', function () {
    return view('layout_sit/welcome');
});

Route::group(["prefix" => "acount" , "middelware" => "auth" , "namespace" => "Front"] , function() {

    Route::get("about" , "Firest_controller@index");

    Route::get("home" , function () {
        return "my name is ahmed";
    }) -> name("h");

    Route::get("section" , "Sacand_controller@index"); 

});

Auth::routes(["verify" => true]);

Route::get('/home', 'HomeController@index')->name('home');
