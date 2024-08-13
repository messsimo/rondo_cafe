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
    <!-- Категория  Pasta & Risotto -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1>Pasta & Risotto</h1>
    </div>
    <div class="container">
        @foreach ($product1 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
                <img class="img" src="{{ asset('images/info.svg') }}" alt="Info">
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <div class="buy">
                    <p>În coș</p>
                    <img class="img" src="{{ asset('images/cart.svg') }}" alt="Info">
                </div>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Supe -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1>Supe</h1>
    </div>
    <div class="container">
        @foreach ($product2 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
                <img class="img" src="{{ asset('images/info.svg') }}" alt="Info">
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <div class="buy">
                    <p>În coș</p>
                    <img class="img" src="{{ asset('images/cart.svg') }}" alt="Info">
                </div>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Salate -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1>Salate</h1>
    </div>
    <div class="container">
        @foreach ($product3 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
                <img class="img" src="{{ asset('images/info.svg') }}" alt="Info">
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <div class="buy">
                    <p>În coș</p>
                    <img class="img" src="{{ asset('images/cart.svg') }}" alt="Info">
                </div>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория Pizza -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1>Pizza</h1>
    </div>
    <div class="container">
        @foreach ($product5 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
                <img class="img" src="{{ asset('images/info.svg') }}" alt="Info">
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <div class="buy">
                    <p>În coș</p>
                    <img class="img" src="{{ asset('images/cart.svg') }}" alt="Info">
                </div>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Fast Food -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1>Fast Food</h1>
    </div>
    <div class="container">
        @foreach ($product4 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
                <img class="img" src="{{ asset('images/info.svg') }}" alt="Info">
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <div class="buy">
                    <p>În coș</p>
                    <img class="img" src="{{ asset('images/cart.svg') }}" alt="Info">
                </div>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Aperitive -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1>Aperitive</h1>
    </div>
    <div class="container">
        @foreach ($product6 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
                <img class="img" src="{{ asset('images/info.svg') }}" alt="Info">
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <div class="buy">
                    <p>În coș</p>
                    <img class="img" src="{{ asset('images/cart.svg') }}" alt="Info">
                </div>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection