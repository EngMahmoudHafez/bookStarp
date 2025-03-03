<?php

use App\Http\Controllers\website\AuthController;
use App\Http\Controllers\website\BookController;
use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\UserBook;
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


Route::get('test', function () {
    $collection = collect([1, 2, 3, 4, 5, 6, 7,8,9,10,11,12,13,14,15]);

    $data = $collection->chunk(4)->values();
    return $data->all();
});
