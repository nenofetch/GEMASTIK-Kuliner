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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['role:Administrator'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Toko
    Route::controller(App\Http\Controllers\TokoController::class)->group(function () {
        Route::get('/toko', 'index')->name('toko');
        Route::get('/toko/tambah', 'create')->name('create');
        Route::post('/toko/simpan', 'store')->name('store');
        Route::get('/toko/edit/{id}', 'edit')->name('edit');
        Route::put('/toko/{id}', 'update')->name('update');
        Route::delete('/toko/{id}', 'destroy')->name('destroy');
    });
});

Auth::routes();
