<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jajal', function () {
    return view('tugas');
});

Route::resource('posts', PostController::class);

