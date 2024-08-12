<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Название страницы -->
@section("title") 
    Rondo Lounge Cafe
@endsection

<!-- Основаная секция -->
@section("main")
<!-- Блок Hero -->
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

<!-- Блок с категориями -->
<div class="categoryes">
    @foreach($categoryes as $el)
    <div class="block">
        <a href="">
            <img src="{{ asset('images/deco.png') }}">
            <p>{{ $el->name }}</p>
        </a>
    </div>
    @endforeach
</div>

<!-- Блок с товароми -->
<div class="items">
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1>Pizza</h1>
    </div>

    <div class="container">
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/food1.png') }}" alt="">

            <div class="info-item">
                <img class="img" src="{{ asset('images/info.svg') }}" alt="Info">
                <p>Pasta Carbonara</p>
            </div>

            <div class="buy-item">
                <div class="buy">
                    <p>În coș</p>
                    <img class="img" src="{{ asset('images/cart.svg') }}" alt="Info">
                </div>
                <p>102 mdl</p>
            </div>
        </div>
    </div>
</div>
@endsection