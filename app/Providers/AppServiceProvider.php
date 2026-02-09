<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.frontend', function ($view) {
            $footerSettings = Setting::where('group', 'like', 'footer_%')
                ->pluck('value', 'key')
                ->toArray();
            $view->with('footerSettings', $footerSettings);
        });
    }
}
