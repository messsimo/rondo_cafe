<!-- Подключение файла сборщика -->
@extends("layouts.app_admin")

<!-- Название страницы -->
@section("title") 
    Admin Panel - Products
@endsection

<!-- Основаная секция -->
@section("products_info")
    <div class="orders">
        <h1>All orders</h1>
    
        <a href="{{ route('add_product_form') }}" class="add-product">Add new</a>

        <!-- Вывод оповщения об удалении -->
        @if (session('delete'))
            <div class="alert">
                <span>{{ session('delete') }}</span>
            </div>
        @endif

        <!-- Вывод оповещения об редактировании -->
        @if (session('edit'))
            <div class="alert">
                <span>{{ session('edit') }}</span>
            </div>
        @endif

        <!-- Вывод оповещения об добавлении -->
        @if (session('add'))
            <div class="alert">
                <span>{{ session('add') }}</span>
            </div>
        @endif

        <div class="container-orders product-conteiner">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <!-- Вывод всех товаров из таблицы -->
            @foreach ($items as $el)
            <tr>
                <td>{{ $el->id }}</td>
                <td>{{ $el->name }}</td>
                <td>{{ $el->category }}</td>
                <td>{{ $el->price }}</td>
                <td><a href="{{ route('edit_product_form', $el->id )}}" class="edit-prod">Edit</a></td>
                <td><a href="{{ route('delete_product', $el->id )}}" onclick="return confirm('Delete product {{ $el->name }}?')">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Пагинация -->
        <div class="pagination">
            {{ $items->links('vendor.pagination.custom') }}
        </div>
        </div>
    </div>
@endsection