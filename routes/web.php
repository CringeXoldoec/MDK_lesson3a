<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');
Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
Route::get('/applications/{application}', [ApplicationController::class, 'show'])->name('applications.show');