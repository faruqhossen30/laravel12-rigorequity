<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminProjectController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard/projects', AdminProjectController::class)->names('admin.projects');

    Route::get('/dashboard/contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/dashboard/contacts/{contact}', [AdminContactController::class, 'show'])->name('admin.contacts.show');

    Route::get('/dashboard/settings/homepage', [SettingController::class, 'homepage'])->name('settings.homepage');
    Route::get('/dashboard/settings/about', [SettingController::class, 'about'])->name('settings.about');
    Route::get('/dashboard/settings/contact', [SettingController::class, 'contact'])->name('settings.contact');
    Route::get('/dashboard/settings/investment', [SettingController::class, 'investment'])->name('settings.investment');
    Route::get('/dashboard/settings/construction', [SettingController::class, 'construction'])->name('settings.construction');
    Route::get('/dashboard/settings/development', [SettingController::class, 'development'])->name('settings.development');
    Route::get('/dashboard/settings/public-sector', [SettingController::class, 'publicSector'])->name('settings.public-sector');
    Route::get('/dashboard/settings/footer', [SettingController::class, 'footer'])->name('settings.footer');
    Route::put('/dashboard/settings', [SettingController::class, 'update'])->name('settings.update');
});
