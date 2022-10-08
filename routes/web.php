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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->group(function () {
    Route::resources([
        'dashboard' => App\Http\Controllers\Backend\DashboardController::class,
        'toko' => App\Http\Controllers\Backend\TokoController::class,
    ]);

    // // Toko
    // Route::controller(App\Http\Controllers\Backend\TokoController::class)->group(function () {
    //     Route::get('/toko', 'index')->name('toko');
    //     Route::get('/toko/tambah', 'create')->name('create');
    //     Route::post('/toko/simpan', 'store')->name('store');
    //     Route::get('/toko/edit/{id}', 'edit')->name('edit');
    //     Route::put('/toko/{id}', 'update')->name('update');
    //     Route::delete('/toko/{id}', 'destroy')->name('destroy');
    // });
    // Route::resource('toko', TokoController::class)->names([
    //     'index' => 'manage.toko',
    //     'create' => 'toko.create',
    //     'store' => 'toko.store',
    //     'edit' => 'toko.edit',
    //     'update' => 'toko.update',
    //     'destroy' => 'toko.destroy',
    // ]);
});

Auth::routes();
