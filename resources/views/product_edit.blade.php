<!-- Подключение файла сборщика -->
@extends("layouts.app_admin")

<!-- Название страницы -->
@section("title") 
    Admin Panel - Products
@endsection

<!-- Основаная секция -->
@section("products_edit")
    <div class="orders">
        <h1>Edit product - #{{ $items->id }}</h1>
      
        <div class="container-orders product-conteiner-2">
            <form action="{{ route('edit_product', $items->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" value="{{ $items->name }}"><br>
    
                <label for="category">Category</label><br>
                <select name="category" id="category">
                    <option value="{{ $items->category }}">{{ $items->category }} - Actuall</option>
                    @foreach ($categoryes as $el)
                        <option value="{{ $el->name }}">{{ $el->name }}</option>
                    @endforeach
                </select><br>

                <label for="name">Price</label><br>
                <input type="text" name="price" id="price" value="{{ $items->price }}"><br>
                <label for="name">Wieght</label><br>
                <input type="text" name="wieght" id="wieght" value="{{ $items->wieght }}"><br>
                <label for="description">Description</label><br>
                <textarea name="description" id="description">{{ $items->description }}</textarea><br>

                <label for="photo">Photo</label><br>
                <input type="file" name="photo" id="photo"><br>

                <button type="submit">Edit</button>
            </form>

            <div class="product-image">
                <p>Item photo:</p>
                <img class="food-img" src="{{ asset('cover_images/' . $items->photo) }}" alt="{{ $items->name }}">

                <!-- Вывод ошибок -->
                @if($errors->any())
                    <ul>
                        @foreach ($errors->all() as $el) 
                            <li>{{ $el }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection