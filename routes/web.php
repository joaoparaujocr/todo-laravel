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

Route::get('/', [HomeController::class, 'show'])->name('home')->middleware('auth');

Route::controller(AuthController::class)->prefix('/auth')->name('auth.')->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerStore')->name('resgister.store');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginStore')->name('login.store');
    Route::get('/logout', 'logout')->middleware('auth')->name('logout');

});

// Routes tasks
Route::controller(TaskController::class)->prefix('/tasks')->name('tasks.')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'index')->name('all');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{task}', 'edit')->name('edit');
        Route::patch('/{task}', 'update')->name('update');
        Route::get('/{task}', 'destroy')->name('delete');
        Route::post('/done', 'taskDone')->name('done');
    });
});

