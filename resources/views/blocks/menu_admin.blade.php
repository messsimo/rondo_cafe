<!-- Секция с меню админ панели -->
@section("admin_menu")
    <div class="admin_menu">
        <div class="logo">
            <h1>Admin<b>Panel</b></h1>
            <h3>Rondo Lounge Cafe</h3>
        </div>

        <div class="container">
            <a href="{{ route('orders') }}">Заказы</a>
            <a href="{{ route('products') }}">Товары</a>
        </div>

        <a href="{{ route('orders') }}" class="gohome">Main page</a>
    </div>