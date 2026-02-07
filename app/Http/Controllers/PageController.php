<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Setting;
use App\Models\Project;

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
        $settings = Setting::where('group', 'like', 'investment_%')
            ->pluck('value', 'key')
            ->toArray();
            $faqs = Faq::where('page','investment')->get();
        return view('investment-management', compact('settings', 'faqs'));
    }

    public function constructionPage()
    {
        $settings = Setting::where('group', 'like', 'construction_%')
            ->pluck('value', 'key')
            ->toArray();

        return view('construction', compact('settings'));
    }

    public function publicSectorPage()
    {
        $settings = Setting::where('group', 'like', 'public_sector_%')
            ->pluck('value', 'key')
            ->toArray();
            $faqs = Faq::where('page','public_sector')->get();

        return view('public-sector', compact('settings', 'faqs'));
    }

    public function developmentPage()
    {
        $settings = Setting::where('group', 'like', 'development_%')
            ->pluck('value', 'key')
            ->toArray();

        return view('development', compact('settings'));
    }

    public function allProjectPage()
    {
        $upcomingProjects = Project::where('status', 'Upcoming')->get();
        $completedProjects = Project::whereIn('status', ['Completed', 'Listed', 'Sold', 'Fully Leased'])->get();

        return view('all-project', compact('upcomingProjects', 'completedProjects'));
    }
}
