<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::controller(TaskController::class)->prefix('/tasks')->name('tasks.')->group(function () {
    Route::get('/', 'index')->name('all');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{task}', 'edit')->name('edit');
    Route::patch('/{id}', 'update');
    Route::get('/{id}', 'destroy')->name('delete');
});

