<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\Posts\PostController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [ProductController::class, 'products'])->name('products');
Route::get('/shop/{product}', [ProductController::class, 'show'])->name('shop.show');
Route::get('/shop/{category}', [ProductController::class, 'filter'])->name('shop.filter');
Route::post('/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/getforadmin', [ProductController::class, 'getForAdmin']);

Route::post('/post', [PostController::class, 'createPost'])->name('post');


Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::post('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/about', [ContactController::class, 'about'])->name('about');
Route::post('/message', [ContactController::class, 'message'])->name('message');

Route::get('/profile', [UserController::class, 'index'])->name('profile');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');



