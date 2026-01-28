<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function taskList(Request $request) 
    {
        $tasks = Auth::user()->tasks;
        
        return view('pages.taskList', compact('tasks'));
    }
    
    public function taskListCreate() 
    {
        return view('pages.taskListCreate');
    }

    public function taskCreate(TaskRequest $request) 
    {
        $task = Auth::user()->tasks()->create([
            'task_name' => $request->input('task_name'),
            'task_description' => $request->input('task_description'),
        ]);

        return redirect()->route('task.list');
    }

    public function taskComplete($id) 
    {
        $task = Task::findOrFail($id);
        $task->update(['is_complete' => true]);
        
        return redirect()->route('task.list');
    }

    public function taskDelete($id) 
    {
        $task = Task::findOrFail($id);
        $task->delete();
        
        return redirect()->route('task.list');
    }
}
