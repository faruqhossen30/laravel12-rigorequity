<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        $settings = Setting::where('group', 'like', 'contact_%')
            ->pluck('value', 'key')
            ->toArray();

        return view('contact-page', compact('settings'));
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'inquiry_type' => 'required|string|max:50',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Thank you for your message. We will get back to you shortly.');
    }
}
