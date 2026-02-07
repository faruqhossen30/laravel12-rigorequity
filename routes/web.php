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
Route::get('about', [PageController::class, 'aboutPage']);
Route::get('community-impact', [PageController::class, 'communityImpactPage']);
Route::get('investment-management', [PageController::class, 'investmentManagementPage']);
Route::get('construction', [PageController::class, 'constructionPage']);
Route::get('public-sector', [PageController::class, 'publicSectorPage']);
Route::get('development', [PageController::class, 'developmentPage']);
Route::get('all-project', [PageController::class, 'allProjectPage'])->name('all-project');
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');
