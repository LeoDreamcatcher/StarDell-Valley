<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
});

Route::get('products', [ProductController::class, 'index'])->name('products.index');

