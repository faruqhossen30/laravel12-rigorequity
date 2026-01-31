@extends('layouts.frontend')

@section('title', $newsItem->title . ' - Rigorequity')

@section('content')
    <article class="container mx-auto px-4 py-16 max-w-4xl">
        <div class="mb-8 text-center">
            <div class="flex items-center justify-center gap-2 text-sm text-muted-foreground mb-4">
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                    {{ $newsItem->category->name ?? 'News' }}
                </span>
                <span>•</span>
                <time datetime="{{ $newsItem->created_at->format('Y-m-d') }}">
                    {{ $newsItem->created_at->format('F d, Y') }}
                </time>
            </div>
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-6">
                {{ $newsItem->title }}
            </h1>
        </div>

        @if($newsItem->thumbnail)
            <div class="mb-10 rounded-xl overflow-hidden border bg-muted aspect-video relative shadow-sm">
                <img src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="{{ $newsItem->title }}" class="object-cover w-full h-full">
            </div>
        @endif

        <div class="prose prose-slate dark:prose-invert max-w-none mx-auto">
            {!! $newsItem->description !!}
        </div>

        <div class="mt-16 pt-8 border-t flex justify-between items-center">
            <a href="{{ route('news.index') }}" class="inline-flex items-center text-sm font-medium text-muted-foreground hover:text-foreground">
                <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Back to All News
            </a>
        </div>
    </article>
@endsection
