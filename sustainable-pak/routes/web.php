<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Main/home');
});

Route::get('/home', function () {
    return view('Main/home');
});

Route::get('/business_signup', function () {
    return view('Main/business_signup');
});

Route::get('/login', function () {
    return view('Main/login');
});
