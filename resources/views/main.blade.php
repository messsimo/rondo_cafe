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
            <a href="#menu">
                <img src="{{ asset('images/deco.png') }}">
                <h3>Meniu</h3>
            </a>
        </div>

        <div class="link-2">
            <a href="#Pizza">
                <img src="{{ asset('images/deco.png') }}">
                <h3>Pizza</h3>
            </a>
        </div>
    </div>
</div>

<!-- Блок с категориями -->
<div class="categoryes">
    @foreach($categoryes as $el)
    <div class="block">
        <a href="#{{ $el->name }}">
            <img src="{{ asset('images/deco.png') }}">
            <p>{{ $el->name }}</p>
        </a>
    </div>
    @endforeach
</div>

<!-- Блок с товароми -->
<div class="items" id="menu">
    <!-- Категория  Pasta & Risotto -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1 id="Pasta & Risotto">Pasta & Risotto</h1>
    </div>
    <div class="container">
        @foreach ($product1 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
                <a href="{{ route('product', $a->id) }}"><img class="img" src="{{ asset('images/info.svg') }}" alt="Info"></a>
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <a href="{{ route('cart', $a->id) }}">
                    <div class="buy">
                        <p>În coș</p>
                        <img class="img" src="{{ asset('images/cart.svg') }}">
                    </div>
                </a>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Supe -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1 id="Supe">Supe</h1>
    </div>
    <div class="container">
        @foreach ($product2 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
            <a href="{{ route('product', $a->id) }}"><img class="img" src="{{ asset('images/info.svg') }}" alt="Info"></a>
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <a href="{{ route('cart', $a->id) }}">
                    <div class="buy">
                        <p>În coș</p>
                        <img class="img" src="{{ asset('images/cart.svg') }}">
                    </div>
                </a>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Salate -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1 id="Salate">Salate</h1>
    </div>
    <div class="container">
        @foreach ($product3 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
            <a href="{{ route('product', $a->id) }}"><img class="img" src="{{ asset('images/info.svg') }}" alt="Info"></a>
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <a href="{{ route('cart', $a->id) }}">
                    <div class="buy">
                        <p>În coș</p>
                        <img class="img" src="{{ asset('images/cart.svg') }}">
                    </div>
                </a>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория Pizza -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1 id="Pizza">Pizza</h1>
    </div>
    <div class="container">
        @foreach ($product5 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
            <a href="{{ route('product', $a->id) }}"><img class="img" src="{{ asset('images/info.svg') }}" alt="Info"></a>
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <a href="{{ route('cart', $a->id) }}">
                    <div class="buy">
                        <p>În coș</p>
                        <img class="img" src="{{ asset('images/cart.svg') }}">
                    </div>
                </a>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Fast Food -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1 id="Fast Food">Fast Food</h1>
    </div>
    <div class="container">
        @foreach ($product4 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
            <a href="{{ route('product', $a->id) }}"><img class="img" src="{{ asset('images/info.svg') }}" alt="Info"></a>
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <a href="{{ route('cart', $a->id) }}">
                    <div class="buy">
                        <p>În coș</p>
                        <img class="img" src="{{ asset('images/cart.svg') }}">
                    </div>
                </a>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Категория  Aperitive -->
    <div class="items-cat">
        <img src="{{ asset('images/items-deco.png') }}">
        <h1 id="Aperitive">Aperitive</h1>
    </div>
    <div class="container">
        @foreach ($product6 as $a)
        <div class="block">
            <img class="food-img" src="{{ asset('cover_images/' . $a->photo) }}" alt="{{ $a->name }}">

            <div class="info-item">
            <a href="{{ route('product', $a->id) }}"><img class="img" src="{{ asset('images/info.svg') }}" alt="Info"></a>
                <p>{{ $a->name }}</p>
            </div>

            <div class="buy-item">
                <a href="{{ route('cart', $a->id) }}">
                    <div class="buy">
                        <p>În coș</p>
                        <img class="img" src="{{ asset('images/cart.svg') }}">
                    </div>
                </a>
                <p>{{ $a->price }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection