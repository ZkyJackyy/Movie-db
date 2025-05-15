<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[MovieController::class,'index']);
Route::get('/movie/{id}/{slug}',[MovieController::class,'detailMovie']);
Route::get('/movie/create',[MovieController::class,'create'])->name('movie.create');
Route::post('/movie/store',[MovieController::class,'store'])->name('movies.store');
