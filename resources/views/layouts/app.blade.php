<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/product.css') }}">
    <link rel="stylesheet" href="{{ url('css/cart.css') }}">
    <link rel="stylesheet" href="{{ url('css/checkout.css') }}">
    <!-- Динамическое название страниц -->
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение шапки сайта -->
    @include("blocks.header")

    <!-- Подключение секций -->
    @yield("main")
    @yield("product_info")
    @yield("cart")
    @yield("checkout")
</body>
</html>