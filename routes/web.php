<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/applications', [ApplicationController::class, 'index'])->middleware('auth')->name('applications.index');
Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
Route::get('/applications/{application}', [ApplicationController::class, 'show'])->name('applications.show');

Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'create_login'])->name('login');
Route::post('/login', [AuthController::class, 'store_login']);