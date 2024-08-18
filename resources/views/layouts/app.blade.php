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
    <link rel="stylesheet" href="{{ url('css/header_adaptation.css') }}">
    <link rel="stylesheet" href="{{ url('css/main_adaptation.css') }}">
    <link rel="stylesheet" href="{{ url('css/product_adaptation.css') }}">
    <link rel="stylesheet" href="{{ url('css/cart_adaptation.css') }}">
    <!-- Динамическое название страниц -->
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение шапки сайта -->
    @include("blocks.header")

    <!-- Подключение секций сайта -->
    @yield("main")
    @yield("product_info")
    @yield("cart")
    @yield("checkout")

    <!-- Подключение секций админ панели -->
    @yield("admin_panel")

    <!-- Подключение JS -->
    <script src="{{ url('js/burger.js') }}"></script>
</body>
</html>