<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['role:User'])->group(function () {
    Route::resources(['home' => App\Http\Controllers\Backend\DashboardController::class]);
});

Route::middleware(['role:Administrator'])->group(function () {
    Route::resources([
        'dashboard' => App\Http\Controllers\Backend\DashboardController::class,
        'kategori' => App\Http\Controllers\Backend\CategoryController::class,
        'produk' => App\Http\Controllers\Backend\ProductController::class,
        'toko' => App\Http\Controllers\Backend\TokoController::class,
        'pengguna' => App\Http\Controllers\Backend\UserController::class,
    ]);
});

Auth::routes();
