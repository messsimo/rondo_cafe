<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Название страницы -->
@section("title") 
    Rondo Lounge Cafe
@endsection

<!-- Основаная секция -->
@section("main")
<div class="hero">
    <div class="logo">
        <img src="{{ asset('images/logo1.png') }}">
    </div>

    <div class="links">
        <div class="link-1">
            <img src="{{ asset('images/deco.png') }}">
            <h3>Meniu</h3>
        </div>

        <div class="link-2">
            <img src="{{ asset('images/deco.png') }}">
            <h3>Pizza</h3>
        </div>
    </div>
</div>
@endsection