@extends('layouts.frontend')

@section('title', $settings['public_sector_seo_title'] ?? 'Public Sector Development - Rigor Equity')
@section('meta_description', $settings['public_sector_seo_description'] ?? '')

@section('content')
    <!-- Hero Section -->
    <div class="relative w-full h-[600px] flex items-center justify-center bg-black text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <!-- Placeholder image resembling the aerial view of public buildings -->
            <img src="{{ $settings['public_sector_hero_image'] ?? 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop' }}" alt="Public Sector Development"
                class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">{{ $settings['public_sector_hero_title'] ?? 'Public Sector Development' }}</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto mb-8 font-light">
                {{ $settings['public_sector_hero_subtitle'] ?? 'Partnering with municipalities and public agencies to deliver quality residential housing that serves communities for generations.' }}
            </p>
            <a href="{{ $settings['public_sector_hero_cta_link'] ?? '/contact' }}"
                class="inline-flex items-center justify-center px-8 py-3 bg-[#431499] text-white font-medium rounded-md hover:bg-[#35107a] transition-colors duration-200">
                {{ $settings['public_sector_hero_cta_text'] ?? 'Explore Partnerships' }}
            </a>
        </div>
    </div>

    <!-- Stats Bar -->
    <div class="w-full bg-[#340c7f] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['public_sector_stats_1_value'] ?? '20+' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['public_sector_stats_1_label'] ?? 'Public Projects' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['public_sector_stats_2_value'] ?? '5' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['public_sector_stats_2_label'] ?? 'Municipality Partners' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['public_sector_stats_3_value'] ?? '100%' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['public_sector_stats_3_label'] ?? 'Compliance Record' }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Building for Communities Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ $settings['public_sector_community_title'] ?? 'Building for Communities' }}</h2>
                    <div class="text-gray-600 mb-6 leading-relaxed">
                         {!! $settings['public_sector_community_content'] ?? 'Rigor Equity brings private sector efficiency and innovation to public sector residential development...' !!}
                    </div>
                    <a href="{{ $settings['public_sector_community_cta_link'] ?? '/process' }}"
                        class="inline-flex items-center justify-center px-6 py-3 bg-[#340c7f] text-white font-medium rounded-md hover:bg-[#2a0a66] transition-colors duration-200 text-sm uppercase tracking-wide">
                        {{ $settings['public_sector_community_cta_text'] ?? 'Learn About Our Process' }}
                    </a>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="relative rounded-lg overflow-hidden shadow-xl h-[400px]">
                        <img src="{{ $settings['public_sector_community_image'] ?? 'https://images.unsplash.com/photo-1448630360428-65456885c650?q=80&w=2067&auto=format&fit=crop' }}" alt="Community Building"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Cards Section -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $settings['public_sector_services_1_title'] ?? 'Single Family Homes' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ $settings['public_sector_services_1_desc'] ?? 'Quality single-family residential construction for public housing initiatives and community development programs.' }}
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $settings['public_sector_services_2_title'] ?? 'Multi-Dwelling Units (MDU)' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ $settings['public_sector_services_2_desc'] ?? 'Multi-dwelling residential developments that balance community needs with efficient land use.' }}
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $settings['public_sector_services_3_title'] ?? 'Multifamily Residential' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ $settings['public_sector_services_3_desc'] ?? 'Large-scale multifamily projects including affordable housing and mixed-income communities.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Partner Section -->
    <div class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $settings['public_sector_why_title'] ?? 'Why Partner with Rigor Equity?' }}</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    {{ $settings['public_sector_why_subtitle'] ?? 'We bring unique advantages to public sector development projects.' }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm flex gap-6 items-start">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-lg flex items-center justify-center shrink-0 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $settings['public_sector_why_1_title'] ?? 'Regulatory Expertise' }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            {{ $settings['public_sector_why_1_desc'] ?? 'Deep understanding of public procurement, compliance requirements, and government regulations.' }}
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm flex gap-6 items-start">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-lg flex items-center justify-center shrink-0 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $settings['public_sector_why_2_title'] ?? 'Community Engagement' }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            {{ $settings['public_sector_why_2_desc'] ?? 'Proven track record of working with stakeholders and community members throughout project lifecycles.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- P3 Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-[#1a0b4b] rounded-2xl p-12 text-white relative overflow-hidden">
                <!-- Background decorative elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-purple-500/10 rounded-full -mr-16 -mt-16 blur-3xl"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl font-bold mb-4">{{ $settings['public_sector_p3_title'] ?? 'Public-Private Partnerships (P3)' }}</h2>
                    <p class="text-white/80 max-w-3xl mb-12">
                        {{ $settings['public_sector_p3_desc'] ?? 'We specialize in innovative P3 structures that leverage private capital and expertise to deliver public infrastructure more efficiently.' }}
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
                        <div>
                            <h3 class="text-xl font-bold mb-3">{{ $settings['public_sector_p3_1_title'] ?? 'Design-Build-Finance' }}</h3>
                            <p class="text-white/70 text-sm">
                                {{ $settings['public_sector_p3_1_desc'] ?? 'Integrated delivery models that streamline project execution and transfer risk appropriately.' }}
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">{{ $settings['public_sector_p3_2_title'] ?? 'Long-Term Operations' }}</h3>
                            <p class="text-white/70 text-sm">
                                {{ $settings['public_sector_p3_2_desc'] ?? 'Operational partnerships that ensure sustained asset performance over decades.' }}
                            </p>
                        </div>
                    </div>

                    <a href="{{ $settings['public_sector_p3_cta_link'] ?? '/contact' }}" class="inline-block px-6 py-3 bg-white text-[#1a0b4b] font-bold rounded text-sm hover:bg-gray-100 transition-colors">
                        {{ $settings['public_sector_p3_cta_text'] ?? 'Discuss P3 Opportunities' }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Operations Section -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Operations & Asset Management</h2>
                <p class="text-xl text-gray-600">Institutional quality operations across every aspect of the asset lifecycle.</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                @foreach ($faqs as $faq)
                    <div x-data="{ open: false }" class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <button @click="open = !open" class="w-full px-8 py-5 flex items-center justify-between text-left font-bold text-gray-900 hover:bg-gray-50 group">
                            <div class="flex items-center gap-6">
                                <div class="w-10 h-10 rounded bg-[#340c7f]/10 text-[#340c7f] flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg>
                                </div>
                                <span class="text-lg">{{ $faq->question }}</span>
                            </div>
                            <span class="text-gray-400 text-2xl group-hover:text-[#340c7f]" x-text="open ? '-' : '+'">+</span>
                        </button>
                        <div x-show="open" x-transition class="px-8 pb-5 pl-24 text-gray-600">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <div class="py-24 bg-gray-50 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ $settings['public_sector_cta_title'] ?? 'Let\'s Build Something Great Together' }}</h2>
            <p class="text-gray-600 mb-10 max-w-2xl mx-auto">
                {{ $settings['public_sector_cta_desc'] ?? 'Contact our public sector team to discuss how we can support your community\'s infrastructure needs.' }}
            </p>
            <a href="{{ $settings['public_sector_cta_button_link'] ?? '/contact' }}"
                class="inline-flex items-center justify-center px-8 py-4 bg-[#340c7f] text-white font-medium rounded-md hover:bg-[#2a0a66] transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all">
                {{ $settings['public_sector_cta_button_text'] ?? 'Schedule a Meeting' }}
            </a>
        </div>
    </div>
@endsection
