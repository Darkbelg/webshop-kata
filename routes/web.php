<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
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

Route::get('/', [ProductController::class, 'index']);

Route::get('/greeting/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'nl'])) {
        abort(400);
    }

    App::setLocale($locale);

    echo __('Products');
    echo '<hr>';
    echo __('dutch.products');
});

Auth::routes();

Route::resource('orders', OrdersController::class);
Route::resource('products', ProductController::class);
Route::post('/cart/add', [CartController::class,'add'])->name('addToCart');
Route::get('/cart', [CartController::class,'show'])->name('cart.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
