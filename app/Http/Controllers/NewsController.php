<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')
            ->where('status', true)
            ->latest()
            ->paginate(9);

        return view('news.index', compact('news'));
    }

    public function show($slug)
    {
        $newsItem = News::with('category')
            ->where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();

        return view('news.show', compact('newsItem'));
    }
}
