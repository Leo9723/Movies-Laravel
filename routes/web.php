<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\MoviesController as MoviesController;




Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::resource('movies', MoviesController::class);