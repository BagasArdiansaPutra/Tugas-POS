<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome'); });

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\ProductController;
Route::prefix('category')->group(function () {
Route::get('/{category}', [ProductController::class, 'index']);});

use App\Http\Controllers\UserController;
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

use App\Http\Controllers\SalesController;
Route::get('/sales', [SalesController::class, 'index']);