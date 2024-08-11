<!-- Секция с шапкой сайта -->
@section("header")
<header>
    <div class="logo">
       <a href="{{ route('main') }}"><img src="{{ asset('images/logo_header.png') }}"></a>
    </div>

    <div class="nav">
        <ul>
            <a href=""><li>Menu</li></a>
            <a href=""><li>Meniu in sala</li></a>
            <a href="/cariera"><li>Cariera</li></a>
            <a href="/contacte"><li class="last">Contacte</li></a>
        </ul>
    </div>

    <div class="cart-number">
        <div class="number">
            <span>+373 60 951 364</span>
        </div>

        <div class="cart">
            <a href="">
                <img src="{{ asset('images/cart_bg.png') }}" alt="Cosul">
                <img src="{{ asset('images/cart.svg') }}" alt="Cosul" class="cart-icon">
            </a>
        </div>
    </div>
</header>