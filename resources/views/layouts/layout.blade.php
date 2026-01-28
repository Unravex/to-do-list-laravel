<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("header-title")</title>

    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
    <div class="nav">
        <li><a href="{{ route('task.list') }}">Список задач</a></li>
        <li><a href="{{ route('task.list.create') }}">Создание задачи</a></li>
        <li><a href="{{ route('login') }}">Логин</a></li>
        <li><a href="{{ route('registration') }}">Регистрация</a></li>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    </div>
    @yield("content")
</body>
</html>