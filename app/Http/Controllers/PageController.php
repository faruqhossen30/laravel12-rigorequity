<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class PageController extends Controller
{
    public function aboutPage()
    {
        $settings = Setting::where('group', 'like', 'about_%')
            ->pluck('value', 'key')
            ->toArray();

        return view('about-page', compact('settings'));
    }

    public function communityImpactPage()
    {
        return view('community-impact');
    }

    public function investmentManagementPage()
    {
        return view('investment-management');
    }

    public function constructionPage()
    {
        return view('construction');
    }

    public function publicSectorPage()
    {
        return view('public-sector');
    }

    public function developmentPage()
    {
        return view('development');
    }
}
