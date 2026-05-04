<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::group([], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Menu management (dynamic)
    Route::resource('menus', MenuController::class);

    Route::controller(SettingController::class)->group(function () {
        Route::get('/dashboard/site-setting', 'site_setting')->name('site.setting');
        Route::post('/dashboard/site-setting-update', 'site_setting_update')->name('site.setting.update');

        Route::get('/dashboard/seo-setting', 'seo_setting')->name('seo.setting');
        Route::post('/dashboard/seo-setting-update', 'seo_setting_update')->name('seo.setting.update');

        Route::get('/dashboard/appearence-setting', 'appearence_setting')->name('appearence.setting');
        Route::post('/dashboard/appearence-setting-update', 'appearence_setting_update')->name('appearence.setting.update');
    });
});
