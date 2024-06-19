<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('/blogs', BlogsController::class);

//ユーザー登録
// Route::
