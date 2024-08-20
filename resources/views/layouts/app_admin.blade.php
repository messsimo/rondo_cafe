<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/menu_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/orders_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products_admin.css') }}">
    <!-- Динамическое название страниц -->
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение блока с меню -->
    @include("blocks.menu_admin")

    <!-- Подключение секций админ панели -->
    @yield("orders_admin")
    @yield("order_info")
    @yield("products_info")
    @yield("products_edit")
</body>
</html>