<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[MovieController::class,'index']);
Route::get('/movie/{id}/{slug}',[MovieController::class,'detailMovie']);
Route::get('/movie/create',[MovieController::class,'create'])->name('movie.create')->middleware('auth');
Route::post('/movie/store',[MovieController::class,'store'])->name('movies.store');
Route::get('/category/{id}', [CategoriesController::class, 'show']);
Route::get('/login' ,[AuthController::class, 'formLogin'])->name('login');
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');
