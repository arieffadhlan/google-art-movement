<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\DashboardEntity;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\ExhibitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\StoryController;

Auth::routes();
Route::middleware('guest')->group(function () {
    Route::view('/', 'welcome');
    Route::get('/reset-password', [LupaPasswordController::class, 'index'])->name('resetPassword');
    Route::put('/reset-password/edit', [LupaPasswordController::class, 'update'])->name('resetPassword.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/entity/{id}', [EntityController::class, 'index'])->name('entity');
    Route::get('/asset/{id}', [AssetController::class, 'index'])->name('asset');
    Route::get('/story/{id}', [StoryController::class, 'index'])->name('story');
    Route::get('/exhibit/{id}', [ExhibitController::class, 'index'])->name('exhibit');
    Route::get('/artist/{id}', [ArtistController::class, 'index'])->name('artist');
    Route::get('/partner/{id}', [PartnerController::class, 'index'])->name('partner');

    // Dashboard
    Route::get('/dashboard/entity', [DashboardEntity::class, 'index'])->name('dashboard');
    Route::get('/dashboard/entity/create', [DashboardEntity::class, 'create'])->name('entity.create');
    Route::post('/dashboard/entity/store', [DashboardEntity::class, 'store'])->name('entity.store');
    Route::get('/dashboard/entity/edit/{id}', [DashboardEntity::class, 'edit'])->name('entity.edit');
    Route::put('/dashboard/entity/edit/{id}', [DashboardEntity::class, 'update'])->name('entity.update');
    Route::delete('/dashboard/entity/delete/{id}', [DashboardEntity::class, 'destroy'])->name('entity.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
