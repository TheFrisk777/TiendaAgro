<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::resource('/products',App\Http\Controllers\ProductController::class);

Route::resource('/clients',App\Http\Controllers\ClientController::class);

Route::resource('/sales',App\Http\Controllers\SaleController::class);