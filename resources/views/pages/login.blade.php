@extends("layouts.layout")

@section("header-title")
    ToDo List - Логин
@endsection

@section("content")
    <div class="user-form__wrapper">
        <div class="user-form__inner">
            <h1 class="text-center">Вход</h1>

            @if($errors->any())
                <div class="user-form__errors-block">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf

                <div class="user-form__label-input-block">
                    <label for="email">Электронная почта</label>
                    <input type="email" name="email" id="email" class="user-form__input">
                </div>

                <div class="user-form__label-input-block">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" class="user-form__input">
                </div>

                <button type="submit" class="user-form__submit-button">Войти</button>
            </form>

            <div>
                <p>Ещё нет аккаунта?</p>
                <a href="{{ route('registration') }}" class="user-form__link">Зарегистрироваться</a>
            </div>
        </div>
    </div>
@endsection
