<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);

Route::delete('carts/clear/{user_id}', [CartController::class, 'clear']);

Route::resource('users', UserController::class);

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

Route::resource('carts', CartController::class);
Route::resource('wishlists', WishlistController::class);

Route::resource('orders', OrderController::class);
Route::resource('order_items', OrderItemController::class);

Route::resource('payments', PaymentController::class);
