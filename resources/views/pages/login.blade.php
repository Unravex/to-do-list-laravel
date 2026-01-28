@extends("layouts.layout")

@section("header-title")
    ToDo List - Логин
@endsection

@section("content")
    <div class="user-form__wrapper m-5">

        @if($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <label for="email">Электронная почта</label>
            <input type="email" name="email" id="email">

            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">

            <button type="submit">Войти</button>
        </form>

        <div>
            <p>Ещё нет аккаунта?</p>
            <a href="{{ route('registration') }}">Зарегистрироваться</a>
        </div>
    </div>
@endsection
