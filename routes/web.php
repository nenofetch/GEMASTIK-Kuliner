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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/list-produk', [App\Http\Controllers\ProductController::class, 'index'])->name('list-produk');
Route::get('/info-produk/{id}', [App\Http\Controllers\ProductController::class, 'detail'])->name('info-produk');


// Route::get('/list-shop', function () {
//     return view('frontend.user.listShop');
// })->name('list-shop');

Route::middleware(['role:Administrator'])->group(function () {
    Route::resources([
        'kategori' => App\Http\Controllers\Backend\CategoryController::class,
        'pengguna' => App\Http\Controllers\Backend\UserController::class,
    ]);
});

//Toko
Route::resources([
    'dashboard' => App\Http\Controllers\Backend\DashboardController::class,
    'toko' => App\Http\Controllers\Backend\TokoController::class,
    'produk' => App\Http\Controllers\Backend\ProductController::class
]);

Route::post('/storeCategory', [App\Http\Controllers\Backend\ProductController::class, 'storeCategory'])->name('storeCategory');

//change profile
Route::get('/profile', [App\Http\Controllers\Backend\UserController::class, 'profile'])->name('profile');
Route::put('/update-profile', [App\Http\Controllers\Backend\UserController::class, 'update_profile'])->name('update-profile');

Route::get('/change-password', [App\Http\Controllers\Backend\UserController::class, 'change_password'])->name('change-password');
Route::patch('/update-password', [App\Http\Controllers\Backend\UserController::class, 'update_password'])->name('update-password');
Auth::routes();
