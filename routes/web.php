<?php

use Illuminate\Support\Facades\Route;

// Отслеживание главной страницы
Route::get('/', function () {
    return view('main');
});
