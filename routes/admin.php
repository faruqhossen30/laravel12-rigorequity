<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminContactController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/dashboard/contacts/{contact}', [AdminContactController::class, 'show'])->name('admin.contacts.show');

    Route::get('/dashboard/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::get('/dashboard/settings/homepage', [SettingController::class, 'homepage'])->name('settings.homepage');
    Route::get('/dashboard/settings/about', [SettingController::class, 'about'])->name('settings.about');
    Route::get('/dashboard/settings/contact', [SettingController::class, 'contact'])->name('settings.contact');
    Route::put('/dashboard/settings', [SettingController::class, 'update'])->name('settings.update');
});
