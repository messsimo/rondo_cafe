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
                <div class="block">
                    <img src="/cover_images/food1.png">

                    <div class="info">
                        <h2>Pizza</h2>
                        <p>102 mdl</p>

                        <div class="quantity">
                            <button class="quantity-btn">-</button>
                            <input type="text" id="quantity-input" value="1" readonly>
                            <button class="quantity-btn">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order_table">
            <h1>Livrare</h1>
            <div class="table-order">
            <table>
                <tbody>
                    <tr>
                        <th>Subtotal</th>
                        <td>500 mdl</td>
                    </tr>
                    <tr>
                        <th>Livrare</th>
                        <td>50 mdl</td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div class="bottom-table">
                <p>Total: 550 mdl</p>
                <a href=""><button>Comandă</button></a>
            </div>
        </div>
    </div>
@endsection