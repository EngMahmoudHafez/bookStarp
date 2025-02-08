<?php

use App\Http\Controllers\website\AuthController;
use App\Http\Controllers\website\BookController;
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

Route::get('/', function () {
    $books= Book::latest()->take(3)->get();

    return view('website.site.index',compact('books'));
})->name('index');

Route::get('/showMore', function () {
    $books= Book::get();
    return view('website.site.showMore',compact('books'));
})->name('showMore');

Route::get('/favorites', function () {
    $id= UserBook::where('user_id',auth('api')->id())->pluck('id')->toArray();
    $books=Book::whereIn('id',$id)->get();

    return view('website.site.favorites');
})->name('favorites');

Route::get('/cart', function () {
    return view('website.site.cart');
})->name('cart');

Route::post('sign-in', [AuthController::class, 'signIn'])->name('sign-in');
Route::post('sign-up', [AuthController::class, 'signUp'])->name('sign-up');
Route::get('logout', [AuthController::class, 'signOut'])->name('logout');


// Add to Cart
Route::post('/add-to-cart', [BookController::class, 'addToCart'])->name('add-to-cart');

// Add to Favorites
Route::post('/add-to-favorites', [BookController::class, 'addToFavorites'])->name('add-to-favorites');

// Remove from Favorites
Route::post('/remove-from-favorites', [BookController::class, 'removeFromFavorites'])->name('remove-from-favorites');


Route::post('test', function () {
    return 'test';
})->name('test');
Route::resource('/dashboard/books', BookController::class);
