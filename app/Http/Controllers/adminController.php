<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\orders;
use App\Models\items;
use App\Models\categoryes;
// Подключение модулей 
use App\Http\Requests\productRequest;
use App\Http\Requests\addproductRequest;

class adminController extends Controller {
    // Функция показа содержимого
    public function ordersAdmin() {
        // Объявление переменной с данными их таблицы
        $orders = Orders::orderBy("id", "desc")->paginate(25);

        // Передача данных в шаблон
        return view("orders_admin", ["orders" => $orders]);
    }

    // Функция отображения информации о заказе
    public function orderInfo($id) {
        // Выборка из таблицы
        $orders = orders::find($id);

        // Вывод информации в шаблон
        return view("order_info", ["order" => $orders]);
    }
    
    // Функция отображения всех товаров
    // Передача данных в шаблон
    public function products() {
        // Объявление переменной с данными их таблицы
        $items = Items::orderBy("id", "asc")->paginate(25);
    
        // Передача данных в шаблон
        return view("products_admin", ['items' => $items]);
    }

    // Функция удаления товара
    public function deleteProduct($id) {
        // Выборка из таблицы
        items::find($id)->delete();

        // Установка значения в сессию в Контроллере
        Session::put("key", "delete");
        // Установка сообщения
        Session::flash("delete", "Product #$id was delete");

        // Переадрессция
        return redirect()->route("products")->with("delete", "Product #$id was delete");
    }

    // Функция отображения формы редактирования
    public function showEditProduct($id) {
        // Выборка из таблицы
        $items = items::find($id);
        $categoryes = categoryes::all();

        // Передача данных в шаблон
        return view("product_edit", ["items" => $items, "categoryes" => $categoryes]);
    }

    // Функция редактирования товара
    public function editProduct($id, productRequest $req) {
        // Выборка из таблицы
        $items = items::find($id);

        // Добавление измений в запись
        $items->name = $req->input("name");
        $items->category = $req->input("category");
        $items->price = $req->input("price");
        $items->wieght = $req->input("wieght");
        $items->description = $req->input("description");
        
        // Обновление нового фото
        if ($req->hasFile('photo')) {
            // Сохранение фото в папке локального сервера
            $file = $req->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('cover_images'), $filename);
    
            // Сохранения фото в БД
            $items->photo = $filename;
            $items->save();
    
            // Переадрессция
            return redirect()->route("products")->with("edit", "Product #$id was edited");
        }
    
        // Сохранения данных
        $items->save();

        // Установка сообщения
        Session::flash("edit", "Product #$id was edited");
        
        // Переадрессция
        return redirect()->route("products")->with("edit", "Product #$id was edited");
    }

    // Функция отображения формы добавления товара
    public function showAddProduct() {
        // Выборка из БД
        $categoryes = new categoryes();
        return view("add_product", ['categoryes' => $categoryes->all()]);
    }

    // Функция добавления нового товара
    public function addProduct(addproductRequest $req) {
        // Выборка из таблицы
        $items = new items();

        // Добавление измений в запись
        $items->name = $req->input("name");
        $items->category = $req->input("category");
        $items->price = $req->input("price");
        $items->wieght = $req->input("wieght");
        $items->description = $req->input("description");

        // Добавление нового фото
        if ($req->hasFile('photo')) {
            // Сохранение фото в папке локального сервера
            $file = $req->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Название файла (по времени)
            $file->move(public_path('cover_images'), $filename);
            
            // Сохранения фото в БД
            $items->photo = $filename;
            $items->save();
        }

        // Сохранение новых значений
        $items->save();

        Session::flash("add", "New product was added");
        
        // Переадрессция
        return redirect()->route("products")->with("add", "New product was added");
    }
}
