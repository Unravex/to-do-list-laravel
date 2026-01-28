<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;


Route::get('/', function () { return redirect('/login'); })->name('start');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost'])->name('login.post');

Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/registration', [UserController::class, 'registrationPost'])->name('registration.post');

Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/task-list', [TaskController::class, 'taskList'])->name('task.list')->middleware('auth');

Route::get('/task-list/create', [TaskController::class, 'taskListCreate'])->name('task.list.create')->middleware('auth');
Route::post('/task-list/create', [TaskController::class, 'taskCreate'])->name('task.create')->middleware('auth');

Route::post('/task-list/delete/{id}', [TaskController::class, 'taskDelete'])->name('task.delete')->middleware('auth');

Route::post('/task-list/complete/{id}', [TaskController::class, 'taskComplete'])->name('task.complete')->middleware('auth');
