<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [PostagemController::class, 'index'])->name('index');