<?php
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::resource('/products',App\Http\Controllers\ProductController::class);

Route::resource('/clients',App\Http\Controllers\ClientController::class);

Route::resource('/sales',App\Http\Controllers\SaleController::class);

Route::resource('/categories',App\Http\Controllers\CategoryController::class);

Route::get('/categories/{category}/delete',[App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');

Route::get('/clients/{client}/delete',[App\Http\Controllers\ClientController::class, 'delete'])->name('clients.delete');

Route::get('/products/{product}/delete',[App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete');
