<!-- Подключение файла сборщика -->
@extends("layouts.app_admin")

<!-- Название страницы -->
@section("title") 
    Admin Panel - Orders
@endsection

<!-- Основаная секция -->
@section("order_info")
    <div class="orders">
        <h1>Order - {{ $order->name }}</h1>

        <div class="container-orders order-info">
            <p><b>ID:</b> {{ $order->id }}</p>
            <p><b>Customer:</b> {{ $order->name }}</p>
            <p><b>Phone number:</b> {{ $order->phone }}</p>
            <p><b>Email:</b> {{ $order->email }}</p>
            <p><b>Addres:</b> {{ $order->address }}</p>
            <p><b>City:</b> {{ $order->city }}</p>
            <p><b>Method:</b> {{ $order->method }}</p>
            <p><b>Order:</b> {{ $order->order }}</p>
            <p><b>Total:</b> {{ $order->total }} mdl</p>
            <p><b>Ordered:</b> {{ $order->created_at }}</p>
        </div>
    </div>
@endsection