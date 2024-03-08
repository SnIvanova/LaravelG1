<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//METHOD(URI, callback or contoller)
Route::get('/products', [ProductController::class, 'show']);