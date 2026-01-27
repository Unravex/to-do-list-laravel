<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskList() {
        return view('pages.taskList');
    }
    
    public function taskListCreate() {
        return view('pages.taskListCreate');
    }

    public function taskCreate() {
        return 'taskCreate';
    }

    public function taskComplete() {
        return 'taskComplete';
    }

    public function taskDelete() {
        return 'taskDelete';
    }
}
