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
    return view('home');
})->name('home');


Route::get('/playground', function () {
    return view('playground');
})->name('playground');

Route::get('/color', function () {
    return view('colors');
})->name('color');


Route::get('/components', function () {
    return view('components');
})->name('components');
