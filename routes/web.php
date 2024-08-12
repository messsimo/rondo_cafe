<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллеров
use App\Http\Controllers\mainController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'show'])->name("main");
