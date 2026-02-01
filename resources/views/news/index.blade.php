@extends('layouts.frontend')

@section('title', 'Insights & News - Rigor Equity')

@section('content')
    <!-- Hero Section -->
    <div class="bg-[#1a0b4b] text-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <a href="/" class="inline-flex items-center text-sm text-white/70 hover:text-white mb-8 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Home
            </a>
            <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">Insights & News</h1>
            <p class="text-lg text-white/70 font-light max-w-2xl">Thought leadership, market intelligence, and industry insights from our team</p>
        </div>
    </div>

    <!-- Filter & Search Section -->
    <div class="border-b border-gray-200 bg-white sticky top-16 z-30 shadow-sm">
        <div class="container mx-auto px-4 py-4 flex flex-col lg:flex-row items-center justify-between gap-4">
            <!-- Categories -->
            <div class="flex flex-wrap gap-2 w-full lg:w-auto overflow-x-auto pb-2 lg:pb-0 no-scrollbar items-center">
                <a href="#" class="px-4 py-1.5 rounded-md text-xs font-medium bg-[#340c7f] text-white whitespace-nowrap">All</a>
                <a href="#" class="px-4 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors whitespace-nowrap">Company News</a>
                <a href="#" class="px-4 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors whitespace-nowrap">Market Analysis</a>
                <a href="#" class="px-4 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors whitespace-nowrap">Construction</a>
                <a href="#" class="px-4 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors whitespace-nowrap">Investment Strategy</a>
                <a href="#" class="px-4 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors whitespace-nowrap">Public Sector</a>
                <a href="#" class="px-4 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors whitespace-nowrap">Development</a>
            </div>

            <!-- Search -->
            <div class="relative w-full lg:w-64 shrink-0">
                 <input type="text" placeholder="Search insights..." class="w-full pl-9 pr-4 py-2 bg-gray-100 border-none rounded-md text-sm focus:ring-1 focus:ring-[#340c7f] outline-none transition-all placeholder:text-gray-400">
                 <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="bg-[#f8f9fa] py-12 min-h-screen">
        <div class="container mx-auto px-4">
            <div class="mb-8 text-sm text-gray-500 font-medium">{{ $news->count() }} insights found</div>

            @if($news->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($news as $item)
                        <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group h-full flex flex-col border border-gray-100">
                            <a href="{{ route('news.show', $item->slug) }}" class="relative block h-56 overflow-hidden">
                                @if($item->thumbnail)
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                @endif

                                <div class="absolute top-4 left-4">
                                    <span class="inline-block bg-[#340c7f] text-white text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider shadow-md">
                                        {{ $item->category->name ?? 'News' }}
                                    </span>
                                </div>
                            </a>

                            <div class="p-6 flex flex-col flex-1">
                                <div class="flex items-center text-xs text-gray-500 mb-4 space-x-3">
                                    <span class="flex items-center">
                                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        {{ $item->created_at->format('F Y') }}
                                    </span>
                                    <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                    <span class="flex items-center">
                                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        {{ ceil(str_word_count(strip_tags($item->description)) / 200) }} min read
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight group-hover:text-[#340c7f] transition-colors line-clamp-2">
                                    <a href="{{ route('news.show', $item->slug) }}">
                                        {{ $item->title }}
                                    </a>
                                </h3>

                                <p class="text-sm text-gray-600 mb-6 line-clamp-3 flex-1 leading-relaxed">
                                    {{ Str::limit(strip_tags($item->description), 120) }}
                                </p>

                                <div class="text-xs text-gray-500 pt-4 border-t border-gray-100 mt-auto font-medium">
                                    By Rigor Equity Team
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $news->links() }}
                </div>
            @else
                <div class="flex flex-col items-center justify-center py-24 bg-white rounded-lg border border-gray-200 border-dashed text-center">
                    <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                        <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">No insights found</h3>
                    <p class="mt-2 text-sm text-gray-500 max-w-sm">We couldn't find any articles matching your criteria. Please try again or check back later.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
