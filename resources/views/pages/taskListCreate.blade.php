@extends("layouts.layout")

@section("header-title")
    ToDo List - Создание задачи
@endsection

@section("content")
    @include("includes.header")
    
    <form action="{{ route('task.create') }}" method="POST">
        @csrf

        <label for="task_name">Наименование задачи</label>
        <input type="text" name="task_name" id="task_name">

        <label for="task_description">Описание задачи</label>
        <textarea name="task_description" placeholder="Опишите свою задачу здесь..."></textarea>

        <button type="submit">Создать задачу</button>
    </form>
@endsection
