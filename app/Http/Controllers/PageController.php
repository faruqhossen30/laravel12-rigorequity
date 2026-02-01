<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutPage(){
        return view('about-page');
    }

    public function communityImpactPage(){
        return view('community-impact');
    }

    public function investmentManagementPage(){
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

    public function developmentPage(){
        return view('development');
    }
}
