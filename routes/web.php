<?php

use App\Http\Controllers\Backend\ProductController;
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
    return view('frontend.user.index');
})->name('/');

Route::get('/info-produk', function () {
    return view('frontend.user.produk');
})->name('info-produk');

Route::get('/list-produk', function () {
    return view('frontend.user.listProduk');
})->name('list-produk');

Route::get('/list-shop', function () {
    return view('frontend.user.listShop');
})->name('list-shop');

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
    Route::post('/storeCategory', [ProductController::class, 'storeCategory'])->name('storeCategory');
});

Auth::routes();
