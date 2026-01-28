@extends("layouts.layout")

@section("header-title")
    ToDo List - Создание задачи
@endsection

@section("content")
    @include("includes.header")

    <div class="main">
        <div class="main__wrapper">
            <div class="task-list__element">
                <form action="{{ route('task.create') }}" method="POST">
                    @csrf

                    <div class="task-list__label-input-block">
                        <label for="task_name">Наименование задачи</label>
                        <input type="text" name="task_name" id="task_name" class="task-list__input">
                    </div>

                    <div class="task-list__label-input-block">
                        <label for="task_description">Описание задачи</label>
                        <textarea name="task_description" style="resize: vertical" class="task-list__textarea"></textarea>
                    </div>
                    
                    <button type="submit" class="task-list__button-submit">Создать задачу</button>
                </form>

                <div class="task-list__error">
                    @if($errors->any())
                        <div class="user-form__errors-block">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>  
    </div>
    
    
@endsection
