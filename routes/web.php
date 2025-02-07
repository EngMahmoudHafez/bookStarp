<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.site.index');
})->name('index');

Route::get('/showMore', function () {
    return view('website.site.showMore');
})->name('showMore');

Route::get('/favorites', function () {
    return view('website.site.favorites');
})->name('favorites');

Route::get('/cart', function () {
    return view('website.site.cart');
})->name('cart');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
//    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
//        Route::post('login', [AuthController::class, 'login'])->name('login');
//        Route::post('login', [AuthController::class, 'login'])->name('login');
//        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
//    });

});
