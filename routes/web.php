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
use App\Http\Controllers\SearchController;
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
    Route::get('/penelusuran', [SearchController::class, 'index'])->name('search');

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

    Route::get('/dashboard/partner/create', [DashboardPartnerController::class, 'create'])->name('partner.create');
    Route::post('/dashboard/partner/store', [DashboardPartnerController::class, 'store'])->name('partner.store');
    Route::get('/dashboard/partner/edit/{id}', [DashboardPartnerController::class, 'edit'])->name('partner.edit');
    Route::put('/dashboard/partner/edit/{id}', [DashboardPartnerController::class, 'update'])->name('partner.update');
    Route::delete('/dashboard/partner/delete/{id}', [DashboardPartnerController::class, 'destroy'])->name('partner.destroy');

    Route::get('/dashboard/exhibit/create', [DashboardExhibitController::class, 'create'])->name('exhibit.create');
    Route::post('/dashboard/exhibit/store', [DashboardExhibitController::class, 'store'])->name('exhibit.store');
    Route::get('/dashboard/exhibit/edit/{id}', [DashboardExhibitController::class, 'edit'])->name('exhibit.edit');
    Route::put('/dashboard/exhibit/edit/{id}', [DashboardExhibitController::class, 'update'])->name('exhibit.update');
    Route::delete('/dashboard/exhibit/delete/{id}', [DashboardExhibitController::class, 'destroy'])->name('exhibit.destroy');

    Route::get('/dashboard/artist/create', [DashboardArtistController::class, 'create'])->name('artist.create');
    Route::post('/dashboard/artist/store', [DashboardArtistController::class, 'store'])->name('artist.store');
    Route::get('/dashboard/artist/edit/{id}', [DashboardArtistController::class, 'edit'])->name('artist.edit');
    Route::put('/dashboard/artist/edit/{id}', [DashboardArtistController::class, 'update'])->name('artist.update');
    Route::delete('/dashboard/artist/delete/{id}', [DashboardArtistController::class, 'destroy'])->name('artist.destroy');

    Route::get('/dashboard/asset/create', [DashboardAssetController::class, 'create'])->name('asset.create');
    Route::post('/dashboard/asset/store', [DashboardAssetController::class, 'store'])->name('asset.store');
    Route::get('/dashboard/asset/edit/{id}', [DashboardAssetController::class, 'edit'])->name('asset.edit');
    Route::put('/dashboard/asset/edit/{id}', [DashboardAssetController::class, 'update'])->name('asset.update');
    Route::delete('/dashboard/asset/delete/{id}', [DashboardAssetController::class, 'destroy'])->name('asset.destroy');

    Route::get('/dashboard/story/create', [DashboardStoryController::class, 'create'])->name('story.create');
    Route::post('/dashboard/story/store', [DashboardStoryController::class, 'store'])->name('story.store');
    Route::get('/dashboard/story/edit/{id}', [DashboardStoryController::class, 'edit'])->name('story.edit');
    Route::put('/dashboard/story/edit/{id}', [DashboardStoryController::class, 'update'])->name('story.update');
    Route::delete('/dashboard/story/delete/{id}', [DashboardStoryController::class, 'destroy'])->name('story.destroy');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
