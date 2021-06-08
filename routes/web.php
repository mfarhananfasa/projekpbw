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

Route::get('home', function () {
    return view('home');
});

Route::get('dok', function () {
    return view('dok');
});

Route::get('main', function () {
    return view('main');
});

Route::get('pasien', function () {
    return view('pasien');
});

Route::get('login', function () {
    return view('Auth.login');
});

Route::get('register', function () {
    return view('Auth.register');
});