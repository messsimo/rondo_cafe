<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller {
    // Функция показа содержимого
    public function ordersAdmin() {
        return view("orders_admin");
    }
}
