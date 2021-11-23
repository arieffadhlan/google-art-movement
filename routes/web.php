<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LupaPasswordController;

Route::middleware('guest')->group(function () {
    Route::view('/', 'welcome');
    Route::get('/reset-password', [LupaPasswordController::class, 'index'])->name('resetPassword');
    Route::put('/reset-password/edit', [LupaPasswordController::class, 'update'])->name('resetPassword.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
