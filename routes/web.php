<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\DashboardArtistController;
use App\Http\Controllers\DashboardAssetController;
use App\Http\Controllers\DashboardEntityController;
use App\Http\Controllers\DashboardExhibitController;
use App\Http\Controllers\DashboardPartnerController;
use App\Http\Controllers\DashboardStoryController;
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
    Route::get('/dashboard/entity', [DashboardEntityController::class, 'index'])->name('dashboard-entity');
    Route::get('/dashboard/entity/create', [DashboardEntityController::class, 'create'])->name('entity.create');
    Route::post('/dashboard/entity/store', [DashboardEntityController::class, 'store'])->name('entity.store');
    Route::get('/dashboard/entity/edit/{id}', [DashboardEntityController::class, 'edit'])->name('entity.edit');
    Route::put('/dashboard/entity/edit/{id}', [DashboardEntityController::class, 'update'])->name('entity.update');
    Route::delete('/dashboard/entity/delete/{id}', [DashboardEntityController::class, 'destroy'])->name('entity.destroy');

    Route::get('/dashboard/asset', [DashboardAssetController::class, 'index'])->name('dashboard-asset');
    Route::get('/dashboard/story', [DashboardStoryController::class, 'index'])->name('dashboard-story');
    Route::get('/dashboard/exhibit', [DashboardExhibitController::class, 'index'])->name('dashboard-exhibit');
    Route::get('/dashboard/artist', [DashboardArtistController::class, 'index'])->name('dashboard-artist');
    Route::get('/dashboard/partner', [DashboardPartnerController::class, 'index'])->name('dashboard-partner');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
