<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::get('/tasks/{task}', [TaskController::class, 'show']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);
Route::delete('/tasks/{task}/delete', [TaskController::class, 'delete']);
Route::patch('/tasks/{task}/completar', [TaskController::class, 'completar']);
Route::put('/tasks/{task}', [TaskController::class, 'update']);
