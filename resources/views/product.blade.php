<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Название страницы -->
@section("title") 
    {{ $item->name }}
@endsection

<!-- Основаная секция -->
@section("product_info")
    <div class="product">
        <div class="container-product">
            <img src="{{ asset('cover_images/' . $item->photo) }}" alt="">

            <div class="aside">
                <h1 class="name-product">{{ $item->name }}</h1>

                <div class="price-weight">
                    <h3>{{ $item->price }}</h3>
                    <h3>{{ $item->wieght }}</h3>
                </div>

                <a href="{{ route('cart', $item->id) }}"><button>În coș</button></a>

                <div class="description">
                    <span>{{ $item->description}} </span>
                </div>

                <a class="back" href="{{ route('main') }}">Înapoi</a>
            </div>
        </div>
    </div>
@endsection