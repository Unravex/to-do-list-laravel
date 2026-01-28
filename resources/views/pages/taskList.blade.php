@extends("layouts.layout")

@section("header-title")
    ToDo List - Все задачи
@endsection

@section("content")
    @include("includes.header")
    
    <div class="main">
        <div class="main__wrapper">
            <h1>Все мои задачи:</h1>

            @if(count($tasks))
                @foreach ($tasks as $task)
                    <div class="task-list__element">
                        <div class="task-list__content">
                            <div class="task-list__name-status">
                                <h2>{{ $task->task_name }}</h2>

                                @if ($task->is_complete == true)
                                    <p class="color-approved">Выполнено</p>
                                @elseif ($task->is_complete == false)
                                    <p class="color-error">Не выполнено</p>
                                @endif
                            </div>

                            <p class="fs-18" style="margin-top: 10px">{{ $task->task_description }}</p>
                        </div>

                        <div class="task-list__buttons">
                            <form action="{{ route('task.complete', $task->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="task-list__button-complete">Выполнить</button>
                            </form>

                            <form action="{{ route('task.delete', $task->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="task-list__button-delete">Удалить</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 style="margin-top: 20px">Пока что нет задач</h2>
            @endif
        </div>
    </div>
    
@endsection
