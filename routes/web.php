<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('/', BlogsController::class);
// web.php
Route::resource('/blogs', BlogsController::class);
