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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::get('/task/del', [TaskController::class, 'del'])->name('task.del');
Route::get('/task', [TaskController::class, 'index'])->name('task.view');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/registrer', [AuthController::class, 'register'])->name('register');
