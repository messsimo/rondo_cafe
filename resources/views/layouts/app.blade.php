<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <!-- Динамическое название страниц -->
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение секций -->
    @yield("main")
</body>
</html>