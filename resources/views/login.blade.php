<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Название страницы -->
@section("title") 
    Rondo Lounge Cafe
@endsection

<!-- Основаная секция -->
@section("login_admin")
    <div class="loginForm">
        <form action="{{ route('login_admin_form') }}" method="POST">
            <h1>Login to Admin Panel</h1>

            @csrf

            <label for="login">Login</label><br>
            <input type="text" placeholder="Login" name="login" id="login"><br>
            <label for="password">Password</label><br>
            <input type="password" placeholder="Password" name="password" id="password"><br>

            <button type="submit">Login</button>

            <!-- Вывод ошибок в форме -->
            @if($errors->any())
            <div class="errors-form">
                <ul>
                    @foreach ($errors->all() as $el) 
                        <li>{{ $el }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>
@endsection