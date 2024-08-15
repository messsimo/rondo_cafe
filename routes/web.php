<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллеров
use App\Http\Controllers\mainController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'show'])->name("main");

// Отслеживание страницы определенного блюда
Route::get('/product/{id}', [mainController::class, 'info'])->name("product");

// Отслеживание действий с корзиной
Route::get('/cart', [mainController::class, 'showCart'])->name('showCart');
Route::get('/cart/{id}', [mainController::class, 'addCart'])->name("cart");
Route::post('/cart/quantity/{id}', [mainController::class, 'quantityCart'])->name("quantity");
Route::get('/cart/delete/{id}', [mainController::class, 'deleteProduct'])->name("delete");