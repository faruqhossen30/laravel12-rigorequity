<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->groupBy('group');

        return view('settings.index', compact('settings'));
    }

    public function homepage()
    {
        // Fetch all settings related to homepage (groups starting with 'homepage_' or 'seo')
        $settings = Setting::where('group', 'like', 'homepage_%')
            ->orWhere('group', 'seo')
            ->get()
            ->groupBy('group');

        return view('settings.homepage', compact('settings'));
    }

    public function about()
    {
        // Fetch all settings related to about page
        $settings = Setting::where('group', 'like', 'about_%')
            ->get()
            ->groupBy('group');

        return view('settings.about', compact('settings'));
    }

    public function contact()
    {
        // Fetch all settings related to contact page
        $settings = Setting::where('group', 'like', 'contact_%')
            ->get()
            ->groupBy('group');

        return view('settings.contact', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token', '_method');

        foreach ($data as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}
