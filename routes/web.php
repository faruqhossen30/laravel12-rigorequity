<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'tyro'])->prefix('dashboard')->group(function () {
    // Route::tyroResource('blogs', BlogController::class);
});
