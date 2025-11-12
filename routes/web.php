<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;

Route::get('home', [HomeController::class, 'index']);
Route::get('hello/{name?}', [HelloController::class, 'index'])->name('hello.index');
