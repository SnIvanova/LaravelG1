<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//METHOD(URI, callback or contoller)
Route::get('/users', [UserController::class, 'show']);
