<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;

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

Route::get('/',[AppController::class, 'index'])->name('app.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class, 'productDetails'])->name('shop.product.details');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class,"addToCart"])->name('cart.store');
Route::put('/cart/update',[CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove',[CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class, 'clearCart'])->name('cart.clear');
Route::get('/cart/checkout',[CheckoutController::class, 'cart'])->name('cart.checkout');
Route::get('/cart/order',[OrderController::class, 'cart'])->name('cart.order');

Route::post('/wishlist/add',[WishlistController::class,'addProductToWishlist'])->name('wishlist.store');

Route::get('/contact-us',[ContactController::class, 'index'])->name('contact-us.index');
Route::get('/about-us',[AboutusController::class, 'index'])->name('about-us.index');
Route::get('/blog',[BlogController::class, 'index'])->name('blog.index');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account', [UserController::class, 'index'])->name('user.index');
});

Route::middleware('auth', 'auth.admin')->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/contact-us',[AdminContactController::class, 'index'])->name('admin.contact-us.index');
});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
