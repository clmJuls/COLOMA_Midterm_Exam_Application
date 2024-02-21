<?php

namespace app\Http\Controllers;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gadgets', [ProductController::class, 'show']);