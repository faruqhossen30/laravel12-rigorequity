@extends('layouts.frontend')

@section('title', 'News & Insights - Rigorequity')

@section('content')
    <!-- Hero Section -->
    <section class="container mx-auto px-4 pt-20 pb-16 text-center">
        <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl md:text-6xl mb-6">
            Latest Insights
        </h1>
        <p class="max-w-[700px] mx-auto text-muted-foreground text-xl">
            Stay updated with the latest trends in equity management and real estate investment.
        </p>
    </section>

    <!-- News Grid -->
    <section class="container mx-auto px-4 pb-24">
        @if($news->count() > 0)
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($news as $item)
                    <article class="group flex flex-col overflow-hidden rounded-lg border bg-card text-card-foreground shadow-sm transition-all hover:shadow-md h-full">
                        <a href="{{ route('news.show', $item->slug) }}" class="block overflow-hidden aspect-video relative">
                            @if($item->thumbnail)
                                <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}" class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                            @else
                                <div class="w-full h-full bg-muted flex items-center justify-center">
                                    <svg class="w-12 h-12 text-muted-foreground/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center rounded-full border bg-background/95 px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                    {{ $item->category->name ?? 'News' }}
                                </span>
                            </div>
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <div class="flex items-center gap-2 text-sm text-muted-foreground mb-3">
                                <time datetime="{{ $item->created_at->format('Y-m-d') }}">
                                    {{ $item->created_at->format('M d, Y') }}
                                </time>
                            </div>
                            <h2 class="text-xl font-bold tracking-tight mb-3 group-hover:text-primary transition-colors line-clamp-2">
                                <a href="{{ route('news.show', $item->slug) }}">
                                    {{ $item->title }}
                                </a>
                            </h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4 flex-1">
                                {{ Str::limit(strip_tags($item->description), 120) }}
                            </p>
                            <div class="pt-4 mt-auto border-t">
                                <a href="{{ route('news.show', $item->slug) }}" class="inline-flex items-center text-sm font-medium text-primary hover:underline">
                                    Read Article
                                    <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $news->links() }}
            </div>
        @else
            <div class="text-center py-24 bg-muted/30 rounded-lg border border-dashed">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-muted">
                    <svg class="h-6 w-6 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                </div>
                <h3 class="mt-4 text-lg font-semibold">No news articles found</h3>
                <p class="mt-2 text-sm text-muted-foreground">Check back later for updates and insights.</p>
            </div>
        @endif
    </section>
@endsection
