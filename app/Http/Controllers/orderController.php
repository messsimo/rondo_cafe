<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
// Подключение модулей
use App\Http\Requests\orderRequest;
// Подключение моделей
use App\Models\orders;

class orderController extends Controller {
    // Функция обработки формы оформления заказа
    public function makeOrder(orderRequest $req) {
        // Переменная с данными таблицы
        $new_order = new orders();

        // Массив с товароми
        $cart = session()->get('cart', []);
        $subtotal = 0;
        $order = [];

        // Перебор массва товаров пользователя
        foreach ($cart as $el) {
            $price = (float) $el['price'];
            $quantity = (int) $el['quantity'];
            $subtotal += $price * $quantity;

            // Массив с товароми
            $order = [];    $products[] = $el['name'] . ' (Количество: ' . $quantity . ', Сумма: ' . ($price * $quantity) . ')';
        }

        // Объединение всех товаров в массиве
        $order = implode(', ', $products);

        // Добавление данных в таблицу
        $new_order->name = $req->input("name");
        $new_order->phone = $req->input("phone");
        $new_order->email = $req->input("email");
        $new_order->address = $req->input("adress");
        $new_order->city = $req->input("city");
        $new_order->method = $req->input("method");
        $new_order->order = $order;
        $new_order->total = $subtotal + 50;
        // Сохранения данных
        $new_order->save();

        // Установка значения в сессию
        Session::put("key", "success");
        // Установка сообщения
        Session::flash("success", "Comanda a fost finalizată cu succes. Vă vom suna în curând.");
        // Вывод успешной сессии
        return redirect()->route("checkout")->with("success", "Comanda a fost finalizată cu succes. Vă vom suna în curând.");
    }
    
}
