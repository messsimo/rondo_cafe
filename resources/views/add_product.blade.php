<!-- Подключение файла сборщика -->
@extends("layouts.app_admin")

<!-- Название страницы -->
@section("title") 
    Admin Panel - Products
@endsection

<!-- Основаная секция -->
@section("products_edit")
    <div class="orders">
        <h1>Add new Product</h1>
      
        <div class="container-orders product-conteiner-2">
            <form action="{{ route('add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="name">Name</label><br>
                <input type="text" name="name" id="name"><br>
    
                <label for="category">Category</label><br>
                <select name="category" id="category">
                    @foreach ($categoryes as $el)
                        <option value="{{ $el->name }}">{{ $el->name }}</option>
                    @endforeach
                </select><br>

                <label for="name">Price</label><br>
                <input type="text" name="price" id="price"><br>
                <label for="name">Wieght</label><br>
                <input type="text" name="wieght" id="wieght"><br>
                <label for="description">Description</label><br>
                <textarea name="description" id="description"></textarea><br>

                <label for="photo">Photo</label><br>
                <input type="file" name="photo" id="photo"><br>

                <button type="submit">Add new product</button>
            </form>

            <div class="product-image">
                <!-- Вывод ошибок -->
                @if($errors->any())
                <div class="errors-editForm">
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