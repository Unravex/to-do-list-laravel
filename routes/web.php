<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;


Route::get('/registration', [UserController::class, 'registration'])->name('registration');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/task-list', [TaskController::class, 'taskList'])->name('task.list');

Route::get('/task-list/create', [TaskController::class, 'taskListCreate'])->name('task.list.create');
Route::post('/task-list/create', [TaskController::class, 'taskCreate'])->name('task.create');

Route::post('/task-list/delete', [TaskController::class, 'taskDelete'])->name('task.delete');

Route::post('/task-list/complete', [TaskController::class, 'taskComplete'])->name('task.complete');
