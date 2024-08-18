<!-- Секция с меню админ панели -->
@section("admin_menu")
    <div class="admin_menu">
        <div class="logo">
            <h1>Admin<b>Panel</b></h1>
            <h3>Rondo Lounge Cafe</h3>
        </div>

        <div class="container">
            <a href="{{ route('orders') }}">Заказы</a>
            <a href="">Товары</a>
        </div>
    </div>