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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/specifications', function () {
    return view('specifications');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/dasboard', function () {
    return view('dasboard');
});