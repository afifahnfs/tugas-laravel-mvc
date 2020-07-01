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

Route::get('/welcome', function () {
    return view('welcome1');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/home', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/welcome1', 'AuthController@welcome1_post');
Route::get('/master', function(){
    return view('adminlte.master');
});
Route::get('/', function(){
    return view('content.tabel');
});
Route::get('/data-tables', function(){
    return view('content.data_tabel');
});