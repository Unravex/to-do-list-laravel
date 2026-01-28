@extends("layouts.layout")

@section("header-title")
    ToDo List - Все задачи
@endsection

@section("content")
    @include("includes.header")
    
    <h1>Все мои задачи:</h1>

    @if(count($tasks))
        <ul>
            @foreach ($tasks as $task)
                <li>
                    {{ $task->task_name }}
                    {{ $task->task_description }}
                    
                    <span>({{ $task->is_complete ? 'Выполнил!' : 'В процессе...' }})</span>

                    <form action="{{ route('task.complete', $task->id) }}" method="POST">
                        @csrf
                        <button type="submit">Выполнить</button>
                    </form>

                    <form action="{{ route('task.delete', $task->id) }}" method="POST">
                        @csrf
                        <button type="submit">Удалить</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Нет активных задач.</p>
    @endif
@endsection
