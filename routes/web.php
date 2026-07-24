<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});
Route::middleware('auth')->group(function () {
    Route::apiResource('servicios', ServicioController::class);
});
require __DIR__.'/settings.php';
