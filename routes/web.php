<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('index');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
