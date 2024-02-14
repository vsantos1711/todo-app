<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


Route::controller(TaskController::class)->group(function () {
    Route::get('/', 'listAll')->name('task.list');;
    Route::get('/task/create','create')->name('task.create');;
    Route::post('/task/store','store')->name('task.store');
});

