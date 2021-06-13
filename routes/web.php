<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

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
     return view('Auth.login');
 });

<<<<<<< Updated upstream
Route::get('welcome', [UserAuthController::class, 'welcome'])->middleware('isLogged');

Route::get('dok', function () {
    return view('dokter');
=======

Route::get('dok', function () {
    return view('dok');
>>>>>>> Stashed changes
});

Route::get('pasien', function () {
    return view('pasien');
});

Route::get('login', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn');

Route::get('register', [UserAuthController::class, 'register'])->middleware('AlreadyLoggedIn');

Route::get('logout', [UserAuthController::class, 'logout']);

Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');

Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');


<<<<<<< Updated upstream
=======
Route::get('register', function () {
    return view('Auth.register');
});

Route::get('dashboard', function () {
    return view('dashboard');
});
>>>>>>> Stashed changes
