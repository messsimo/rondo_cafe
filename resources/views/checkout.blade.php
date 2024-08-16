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
                <form action="{{ route('make_order') }}" method="post">
                    @csrf 
                    <label for="name">Nume<b>*</b></label><br>
                    <input type="text" name="name" placeholder="Nume"><br>
                    <label for="phone">Telefon<b>*</b></label><br>
                    <input type="text" name="phone" placeholder="Telefon"><br>
                    <label for="email">Email<b>*</b></label><br>
                    <input type="email" name="email" placeholder="Email"><br>
                    <label for="strada">Strada<b>*</b></label><br>
                    <input type="text" name="adress" placeholder="Strada"><br>
                    <label for="city">Oraş<b>*</b></label><br>
                    <input type="text" name="city" placeholder="Oraş"><br>
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
                <label class="radio-label">
                    <input type="radio" name="method" value="Cash la livrare" class="method">
                    Cash la livrare
                </label>

                <label class="radio-label">
                    <input type="radio" name="method" value="Card la livrare" class="method">
                    Card la livrare
                </label>
            </div>

            <div class="table-bot">
                    <p>Total: {{ $subtotal + 50 }} mdl</p>
                    <button type="submit">Achită</button>
                </form>

                <!-- Отображение удачного формления заказа -->
                @if (session("success"))
                    <div class="alert-success">
                        <span>{{ session('success') }}</span><br>
                    </div>
                @endif

                <!-- Отображение ошибок -->
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                        @foreach ($errors->all() as $el)
                            <li>{{ $el }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection