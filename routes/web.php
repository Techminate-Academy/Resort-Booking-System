<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//rooms
Route::get('/rooms', [RoomController::class, 'roomPage'])->name('rooms');
Route::get('/roomDetails/{id}', [RoomController::class, 'roomDetails'])->name('roomDetails');

Route::get('/roomList', [RoomController::class, 'roomList'])->name('roomList');
Route::get('/roomGetById/{id}', [RoomController::class, 'roomGetById'])->name('roomGetById');
Route::post('/roomCreate', [RoomController::class, 'roomCreate'])->name('roomCreate');
Route::put('/roomUpdate/{id}', [RoomController::class, 'roomUpdate'])->name('roomUpdate');
Route::delete('/roomDelete/{id}', [RoomController::class, 'roomDelete'])->name('roomDelete');

Route::get('/userList', [UserController::class, 'userList'])->name('userList');
