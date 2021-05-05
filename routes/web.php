<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Catalog\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{slug}', [ProductController::class, 'index']);
