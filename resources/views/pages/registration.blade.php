@extends("layouts.layout")

@section("header-title")
    ToDo List - Регистрация
@endsection

@section("content")
    <div class="user-form__wrapper m-5">
        <form action="{{ route('registration.post') }}" method="POST">
            @csrf

            <label for="name">Имя пользователя</label>
            <input type="text" name="name" id="name">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">

            <button type="submit">Зарегистрироваться</button>
        </form>

        <div>
            <p>Уже есть аккаунт?</p>
            <a href="{{ route('login') }}">Войти</a>
        </div>
    </div>
@endsection
