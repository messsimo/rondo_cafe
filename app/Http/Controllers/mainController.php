<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\categoryes; // Подключение модели с табоицей категории
use App\Models\items; // Подключение модели с табоицей товаров

class mainController extends Controller {
    // Функция вывода информации
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

    // Функция вывода динимической информации товара
    public function info($id) {
        // Подключение к таблице
        $item = new items;

        // Вывод информации
        return view("product", ["item" => $item->find($id)]);
    }

    // Функция для отображения корзины
    public function showCart() {
        // Массив с товарами
        $cart = session()->get('cart', []);
        // Адрессация пользователя
        return view('cart', compact('cart'));
    }

    // Функция для отображения коризны
    public function addCart($id) {
        // Поиск товара по Id
        $product = items::find($id);
        // Массива сессий для хранение товаров
        $cart = session::get("cart", []);

        // Условия добавления в корзину
        if (isset($cart[$id])) {

        } else {
            // Добавление нового продукта
            $cart[$id] = [
                'id' => $product->id ?? null,
                'name' => $product->name,
                'photo' => $product->photo,
                "quantity" => 1,
                "price" => $product->price,
                "total" => $product->price
            ];
        }

        // Установка значений в массив
        Session::put("cart", $cart);
        // Session::flush();

        return view('cart', compact('cart'));
    }

    // Функция с добавление и убавлением кол-во продуктов
    public function quantityCart($id, Request $req) {
        // Получение данных из input-полей
        $action = $req->input("action");

        // Получаем текущую корзину из сессии
        $cart = session()->get('cart', []);

        // Условие изменения кол-во товара
        if (isset($cart[$id])) {
            if ($action === "decrease") {
                if ($cart[$id]['quantity'] > 1) {
                    $cart[$id]['quantity'] -= 1;
                }
            } elseif ($action === "increase") {
                $cart[$id]['quantity'] += 1;

                $quantity = isset($cart[$id]['quantity']) ? (float) $cart[$id]['quantity'] : 0;
                $price = isset($cart[$id]['price']) ? (float) $cart[$id]['price'] : 0.0;

                $cart[$id]['total'] = $quantity * $price;
            }
            // Сохраняем обновленную корзину в сессии
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }
}
