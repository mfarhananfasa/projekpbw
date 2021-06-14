<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => 'AlreadyLoggedIn'], function(){
    Route::get('login', [UserAuthController::class, 'login']);
    Route::get('register', [UserAuthController::class, 'register']);

    Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');
    Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');

});

Route::group(['middleware' => 'isLogged'], function(){
    Route::get('dok', [DokterController::class, 'index']);
    Route::get('pasien', [PasienController::class, 'index']);
    Route::get('logout', [UserAuthController::class, 'logout']);
});

