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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/selamat', function () {
    return view('selamat');
});

Route::get('/blog/register', 'HomeController@register');
Route::get('/selamat', 'AuthController@selamat');
Route::get('/selamat', 'AuthController@selamat_post');
Route::post('/selamat', 'AuthController@selamat_post');
