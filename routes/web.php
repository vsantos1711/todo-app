<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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


Route::controller(UserController::class)->group(function () {
    Route::get('/', 'login')->name('user.login');
    Route::get('/user/create', 'create')->name('user.create');

});

Route::controller(TaskController::class)->group(function () {
    Route::get('/tasks', 'listAll')->name('task.list');
    Route::get('/task/create','create')->name('task.create');
    Route::post('/task/store','store')->name('task.store');
    Route::get('/task/update/{id}','update')->name('task.update');
    Route::put('/task/edit/{id}','edit')->name('task.edit');
    Route::delete('/task/delete/{id}','delete')->name('task.delete');
});

