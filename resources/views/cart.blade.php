<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Название страницы -->
@section("title") 
    Coş
@endsection

<!-- Основаная секция -->
@section("cart")
    <div class="cart-page">
        <div class="product_table">
            <h1>Coșul tău</h1>
            <div class="table-product">
            @if(!empty($cart) && count($cart) > 0)
                @foreach($cart as $id => $product)
                <div class="block">
                <img src="{{ asset('cover_images/' . $product['photo']) }}" alt="{{ $product['name'] }}">

                    <div class="info">
                        <h2>{{ $product['name'] }}</h2>
                        <p>{{ $product['price'] }}</p>

                        <div class="quantity">
                            <form action="{{ route('quantity', $product['id']) }}" method="POST">
                                @csrf
                                <button class="quantity-btn" name="action" value="decrease">-</button>
                                <input type="text" name="quantity" value="{{ $product['quantity'] }}" readonly>
                                <button class="quantity-btn" name="action" value="increase">+</button>
                            </form>
                        </div>

                        <a href="{{ route('delete', $product['id']) }}" class="delete">Şterge</a>
                    </div>
                </div>
            @endforeach
            @else
                <p class="nothing">În coș nu este nimic</p>
            @endif
            </div>
        </div>
        @if(!empty($cart))
        <div class="order_table">
            <h1>Livrare</h1>
            <div class="table-order">
            <table>
                <tbody>
                    <tr>
                        <th>Subtotal</th>
                        <td>{{ $subtotal }} mdl</td>
                    </tr>
                    <tr>
                        <th>Livrare</th>
                        <td>50 mdl</td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div class="bottom-table">
                <p>Total: {{ $subtotal + 50}} mdl</p>
                <a href=""><button>Comandă</button></a>
            </div>
        </div>
        @endif
    </div>
@endsection