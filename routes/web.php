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

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('product', function () {
    return view('product');
})->name('product');

Route::get('smartphone', function () {
    return view('product.smartphone');
})->name('smartphone');

Route::get('tablet', function () {
    return view('product.tablet');
})->name('tablet');

Route::get('accessories', function () {
    return view('product.accessories');
})->name('accessories');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
