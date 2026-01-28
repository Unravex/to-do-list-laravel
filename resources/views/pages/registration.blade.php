@extends("layouts.layout")

@section("header-title")
    ToDo List - Регистрация
@endsection

@section("content")
        <div class="user-form__wrapper">
            <div class="user-form__inner">
                <h1 class="text-center">Регистрация</h1>

                @if($errors->any())
                    <div class="user-form__errors-block">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('registration.post') }}" method="POST">
                    @csrf

                    <div class="user-form__label-input-block">
                        <label for="name">Имя пользователя</label>
                        <input type="text" name="name" id="name" class="user-form__input">
                    </div>

                    <div class="user-form__label-input-block">
                        <label for="email">Электронная почта</label>
                        <input type="email" name="email" id="email" class="user-form__input">
                    </div>

                    <div class="user-form__label-input-block">
                        <label for="password">Пароль</label>
                        <input type="password" name="password" id="password" class="user-form__input">
                    </div>

                    <div class="user-form__label-input-block">
                        <label for="password_confirmation">Подтверждение пароля</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="user-form__input">
                    </div>

                    <button type="submit" class="user-form__submit-button">Зарегистрироваться</button>
                </form>

                <div>
                    <p>Уже есть аккаунт?</p>
                    <a href="{{ route('login') }}" class="user-form__link">Войти</a>
                </div>
            </div>
        </div>
@endsection
