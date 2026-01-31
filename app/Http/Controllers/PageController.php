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
}
