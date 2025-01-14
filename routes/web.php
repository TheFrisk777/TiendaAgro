<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::resource('/products',App\Http\Controllers\ProductController::class);