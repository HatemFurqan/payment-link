<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\FavoriteTimeController;
use App\Http\Controllers\Dashboard\CouponController;

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

Route::group(['as' => 'dashboard.', 'namespace' => '\App\Http\Controllers\Auth',], function()
{
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('login.form');
    Route::post('/login', 'AdminLoginController@login')->name('login.post');

});

Route::group(['middleware' => [ 'web' => 'auth:admin' ], 'as' => 'dashboard.'], function()
{

    // home dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // logout
    Route::post('/logout', '\App\Http\Controllers\Auth\AdminLoginController@logout')->name('logout');

    // favorite times
    Route::get('/favorite-times', [FavoriteTimeController::class, 'index'])->name('favorite-times.index');
    Route::post('/favorite-times', [FavoriteTimeController::class, 'store'])->name('favorite-times.store');
    Route::get('/favorite-times/{id}/edit', [FavoriteTimeController::class, 'edit'])->name('favorite-times.edit');
    Route::put('/favorite-times/{id}/update', [FavoriteTimeController::class, 'update'])->name('favorite-times.update');
    Route::delete('/favorite-times/destroy/{id}', [FavoriteTimeController::class, 'destroy'])->name('favorite-times.destroy');
    Route::get('/favorite-times/create', [FavoriteTimeController::class, 'create'])->name('favorite-times.create');

    // favorite times
    Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');
    Route::post('/coupons', [CouponController::class, 'store'])->name('coupons.store');
    Route::get('/coupons/{id}/edit', [CouponController::class, 'edit'])->name('coupons.edit');
    Route::put('/coupons/{id}/update', [CouponController::class, 'update'])->name('coupons.update');
    Route::delete('/coupons/destroy/{id}', [CouponController::class, 'destroy'])->name('coupons.destroy');
    Route::get('/coupons/create', [CouponController::class, 'create'])->name('coupons.create');

});
