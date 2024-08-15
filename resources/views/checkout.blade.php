<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Название страницы -->
@section("title") 
    Checkout
@endsection

<!-- Основаная секция -->
@section("checkout")
<div class="cart-page">
        <div class="product_table">
            <h1>Achitare</h1>
            <div class="form">
                <form action="">
                    @csrf 
                    <label for="name">Nume<b>*</b></label><br>
                    <input type="text" name="name" placeholder="Nume"><br>
                    <label for="phone">Telefon<b>*</b></label><br>
                    <input type="text" name="phone" placeholder="Telefon"><br>
                    <label for="email">Email<b>*</b></label><br>
                    <input type="text" name="email" placeholder="Email"><br>
                    <label for="strada">Strada<b>*</b></label><br>
                    <input type="text" name="adress" placeholder="Strada"><br>
                    <label for="city">Oraş<b>*</b></label><br>
                    <input type="text" name="city" placeholder="Oraş"><br>


                </form>
            </div>
        </div>
        <div class="order_table">
            <h1>Pentru plata</h1>
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

            <div class="table-mid">
                <form action="">
                    <input type="text" name="quantity" value="Cash la livrare" readonly>
                    <input type="text" name="quantity" value="Card la livrare" readonly>
            </div>

            <div class="table-bot">
                    <p>Total: {{ $subtotal + 50 }} mdl</p>
                    <a href="{{ route('checkout') }}"><button>Achită</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection