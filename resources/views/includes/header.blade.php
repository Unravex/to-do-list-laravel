<div class="header">
    <div class="header__inner">
        <a href="{{ route('task.list') }}" class="logo__link">
            <span class="logo__custom-text">ToDo </span>List
        </a>

        <div class="header__navigation">
            <a href="{{ route('task.list') }}" class="fs-20">Список задач</a></li>
            <a href="{{ route('task.list.create') }}" class="fs-20">Создание задачи</a></li>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button fs-20">Выйти</button>
            </form>
        </div>
    </div>
</div>