<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллеров
use App\Http\Controllers\mainController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'show'])->name("main");

// Отслеживание страницы определенного блюда
Route::get('/product/{id}', [mainController::class, 'info'])->name("product");

// Отслеживание страницы с корзиной товаров
Route::get('/cart', [mainController::class, 'cartInfo'])->name("cart");