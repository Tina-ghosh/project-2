<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/student',"Studentcontroller@index");
Route::get('/edit/{id}',"Studentcontroller@edit");
Route::get('/show/{id}',"Studentcontroller@show");
Route::get('/create',"Studentcontroller@create");
Route::post('/store',"Studentcontroller@store");
Route::post('/update/{id}',"Studentcontroller@index");










