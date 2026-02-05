@extends('layouts.frontend')

@section('title', $settings['about_seo_title'] ?? 'About Us - Rigor Equity')
@section('meta_description', $settings['about_seo_description'] ?? '')
@section('meta_keywords', $settings['about_seo_keywords'] ?? '')

@push('styles')
<style>
    .richtext-content p {
        margin-bottom: 0.75rem;
    }
    .richtext-content p:last-child {
        margin-bottom: 0;
    }
    .richtext-content ul {
        list-style-type: disc;
        margin-left: 1.5rem;
        margin-bottom: 0.75rem;
    }
    .richtext-content ol {
        list-style-type: decimal;
        margin-left: 1.5rem;
        margin-bottom: 0.75rem;
    }
</style>
@endpush

@section('content')
<div class="bg-[#f8f9fa] min-h-screen">
    <!-- Hero Section -->
    <div class="container mx-auto px-4 py-16 md:py-24">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                <h1 class="text-4xl md:text-6xl font-bold text-[#340c7f] mb-6 tracking-tight">
                    {!! nl2br(e($settings['about_hero_title'] ?? 'About Rigor Equity')) !!}
                </h1>
                <div class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed richtext-content">
                    {!! $settings['about_hero_subtitle'] ?? 'A vertically integrated operator-led real estate investment and development firm' !!}
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
                    <img src="{{ $settings['about_hero_image'] ?? 'https://images.unsplash.com/photo-1555109307-f7d9da25c244?q=80&w=2073&auto=format&fit=crop' }}" alt="{{ $settings['about_hero_title'] ?? 'About Rigor Equity' }}" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                        <p class="text-white text-sm font-medium">{{ $settings['about_hero_image_caption'] ?? 'Featured in Times Square, New York' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container mx-auto px-4 pb-20">
        <div class="max-w-4xl mx-auto space-y-12">
            <!-- Intro Paragraph -->
            <div class="text-lg text-gray-700 leading-relaxed richtext-content">
                {!! $settings['about_intro_text'] ?? 'Rigor Equity is a vertically integrated operator-led real estate investment and development firm...' !!}
            </div>

            <!-- Our Approach -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-[#340c7f] mb-4">{{ $settings['about_approach_title'] ?? 'Our Approach' }}</h2>
                <div class="text-lg text-gray-700 leading-relaxed richtext-content">
                    {!! $settings['about_approach_text'] ?? 'Founded by a new generation of operators...' !!}
                </div>
            </div>

            <!-- Competitive Advantage -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-[#340c7f] mb-4">{{ $settings['about_advantage_title'] ?? 'Competitive Advantage' }}</h2>
                <div class="text-lg text-gray-700 leading-relaxed richtext-content">
                    {!! $settings['about_advantage_text'] ?? 'Rigor Equity leverages private capital partnerships...' !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Key Differentiators Section -->
    <div class="container mx-auto px-4 pb-24">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-[#340c7f] mb-8">{{ $settings['about_differentiators_title'] ?? 'Key Differentiators' }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">{{ $settings['about_diff_1_title'] ?? 'Operator-Led' }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['about_diff_1_text'] ?? 'Founded and managed by actual developers...' }}
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">{{ $settings['about_diff_2_title'] ?? 'Vertically Integrated' }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['about_diff_2_text'] ?? 'Full control over construction, development...' }}
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">{{ $settings['about_diff_3_title'] ?? 'Data-Informed Strategy' }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['about_diff_3_text'] ?? 'Rigorous market analysis and demographic research...' }}
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">{{ $settings['about_diff_4_title'] ?? 'Community-Focused' }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['about_diff_4_text'] ?? 'Investments designed to revitalize neighborhoods...' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
