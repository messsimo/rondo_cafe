<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryes; // Подключение модели с табоицей категории
use App\Models\items; // Подключение модели с табоицей товаров

class mainController extends Controller {
    public function show() {
        // Подключение к таблицам
        $categoryes = new categoryes();
        $items = new items();

        // Вывод информации из таблиц
        return view("main", [
            "categoryes" => $categoryes->all(), 
            "product1" => $items->where("category", "=", "Pasta & Risotto")->get(),
            "product2" => $items->where("category", "=", "Supe")->get(),
            "product3" => $items->where("category", "=", "Salate")->get(),
            "product4" => $items->where("category", "=", "Fast Food")->get(),
            "product5" => $items->where("category", "=", "Pizza")->get(),
            "product6" => $items->where("category", "=", "Aperitive")->get()
        ]);
    }
}
