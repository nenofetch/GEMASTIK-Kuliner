<?php

use App\Http\Controllers\Backend\UserController;
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
        'kategori' => App\Http\Controllers\Backend\CategoryController::class,
        'dashboard' => App\Http\Controllers\Backend\DashboardController::class,
        'pengguna' => App\Http\Controllers\Backend\UserController::class,
    ]);
    Route::post('/storeCategory', [ProductController::class, 'storeCategory'])->name('storeCategory');
});

//Toko
Route::resources(['toko' => App\Http\Controllers\Backend\TokoController::class]);

//Produk
Route::resources(['produk' => App\Http\Controllers\Backend\ProductController::class]);

//change profile
Route::get('/profile', [App\Http\Controllers\Backend\UserController::class, 'profile'])->name('profile');
Route::put('/update-profile', [App\Http\Controllers\Backend\UserController::class, 'update_profile'])->name('update-profile');

Auth::routes();
