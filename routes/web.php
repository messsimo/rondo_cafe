<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллеров
use App\Http\Controllers\mainController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\adminController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'show'])->name("main");

// Отслеживание страницы определенного блюда
Route::get('/product/{id}', [mainController::class, 'info'])->name("product");

// Отслеживание действий с корзиной
Route::get('/cart', [mainController::class, 'showCart'])->name('showCart');
Route::get('/cart/{id}', [mainController::class, 'addCart'])->name("cart");
Route::post('/cart/quantity/{id}', [mainController::class, 'quantityCart'])->name("quantity");
Route::get('/cart/delete/{id}', [mainController::class, 'deleteProduct'])->name("delete");

// Отслеживание действий с оформлением заказа
Route::get('/checkout', [mainController::class, 'checkout'])->name("checkout");
Route::post('/checkout', [orderController::class, 'makeOrder'])->name("make_order");

// Отслеживание админ панели
Route::get('/admin', [adminController::class, 'ordersAdmin'])->name("orders");
Route::get('/order_info/{id}', [adminController::class, 'orderInfo'])->name("order_info");
Route::get('/products', [adminController::class, 'products'])->name("products");
Route::get('/add_product', [adminController::class, 'addProduct'])->name("add_product");
Route::get('/edit_product/{id}', [adminController::class, 'showEditProduct'])->name("edit_product_form");
Route::post('/edit_product/{id}', [adminController::class, 'editProduct'])->name("edit_product");
Route::get('/delete_product/{id}', [adminController::class, 'deleteProduct'])->name("delete_product");