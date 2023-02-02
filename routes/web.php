<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthPageController;

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

Route::get('/', [TodoController::class, 'index'])->name('todo.index')->middleware('auth');

Route::post('/', [TodoController::class, 'store'])->name('todo.store')->middleware('auth');

Route::get('/todo/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit')->middleware('auth');

Route::put('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update')->middleware('auth');

Route::delete('/todo/delete/{id}', [TodoController::class, 'destroy'])->name('todo.delete')->middleware('auth');

Route::get('/login', [AuthPageController::class, 'login'])->name('login')->middleware('guest');

Route::get('/register', [AuthPageController::class, 'register'])->name('register')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])->name('auth.register')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');