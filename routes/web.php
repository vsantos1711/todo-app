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

Route::get('/', function () {
    return redirect('/task/create');
});

Route::prefix('/task')->group(function () {
    Route::get('/create', [TaskController::class, 'create']);
    Route::post('/store', [TaskController::class, 'store'])->name('task.store');
});

