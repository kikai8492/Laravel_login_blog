<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('/blogs', BlogsController::class);

//ユーザー登録
Route::get('/users/create', [UserController::class, 'create']) -> name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users/login', [AuthController::class,'showLoginForm'])->name('users.login');
Route::post('/users/login',[AuthController::class,'login']);