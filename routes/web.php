<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('/blogs', BlogsController::class);

//ユーザー登録
Route::get('/users/create', [UserController::class, 'create']) -> name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');