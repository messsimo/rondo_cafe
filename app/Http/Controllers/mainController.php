<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryes; // Подключение модели с табоицей категории
use App\Models\items; // Подключение модели с табоицей товаров

class mainController extends Controller {
    public function show() {
        $categoryes = new categoryes();
        $items = new items();

        return view("main", ["categoryes" => $categoryes->all(), "items" => $items->all()]);
    }
}
