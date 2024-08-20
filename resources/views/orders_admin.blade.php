<!-- Подключение файла сборщика -->
@extends("layouts.app_admin")

<!-- Название страницы -->
@section("title") 
    Admin Panel - Orders
@endsection

<!-- Основаная секция -->
@section("orders_admin")
    <div class="orders">
        <h1>All orders</h1>
    
        <div class="container-orders">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Ordered</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <!-- Вывод всех заказов из таблицы -->
                @foreach ($orders as $el)
                <tr>
                    <td>{{ $el->id }}</td>
                    <td>{{ $el->name }}</td>
                    <td>{{ $el->total }} mdl</td>
                    <td>{{ $el->created_at }}</td>
                    <td><a href="{{ route('order_info', $el->id )}}" class="btn-orders">Details</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $orders->links('vendor.pagination.custom') }}
        </div>
        </div>
    </div>
@endsection