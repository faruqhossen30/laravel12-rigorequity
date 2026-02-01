<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', [ContactController::class, 'contactPage']);
Route::get('about', [PageController::class, 'aboutPage']);
Route::get('community-impact', [PageController::class, 'communityImpactPage']);
Route::get('investment-management', [PageController::class, 'investmentManagementPage']);
Route::get('construction', [PageController::class, 'constructionPage']);
Route::get('public-sector', [PageController::class, 'publicSectorPage']);
Route::get('development', [PageController::class, 'developmentPage']);
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');
