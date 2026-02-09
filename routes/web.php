<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use App\Models\Setting;
use App\Models\FeatureClient;
use App\Models\Faq;
use App\Models\Project;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $settings = Setting::where('group', 'like', 'homepage_%')
        ->orWhere('group', 'seo')
        ->pluck('value', 'key')
        ->toArray();
    $featureClients = FeatureClient::select('name', 'logo')->get();
    $faqs = Faq::all();
    $projects = Project::where('status', 'Upcoming')->latest()->take(3)->get();
    if ($projects->isEmpty()) {
        $projects = Project::latest()->take(3)->get();
    }
    $news = News::with('category')->where('status', true)->latest()->take(4)->get();
    return view('home-page', compact('settings', 'featureClients', 'faqs', 'projects', 'news'));
});
Route::get('contact', [ContactController::class, 'contactPage'])->name('contact');
Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('privacy-policy', [PageController::class, 'privacyPolicyPage'])->name('privacy-policy');
Route::get('cookie-policy', [PageController::class, 'cookiePolicyPage'])->name('cookie-policy');
Route::get('terms-and-conditions', [PageController::class, 'termsAndConditionsPage'])->name('terms-and-conditions');
Route::get('about', [PageController::class, 'aboutPage'])->name('about');
Route::get('community-impact', [PageController::class, 'communityImpactPage'])->name('community-impact');
Route::get('investment-management', [PageController::class, 'investmentManagementPage'])->name('invest-namagement');
Route::get('construction', [PageController::class, 'constructionPage'])->name('construction');
Route::get('public-sector', [PageController::class, 'publicSectorPage'])->name('public-sector');
Route::get('development', [PageController::class, 'developmentPage'])->name('development');
Route::get('all-project', [PageController::class, 'allProjectPage'])->name('all-project');
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');
