@extends('layouts.frontend')

@section('title', 'Community Impact - Rigor Equity')

@section('content')
    <!-- Hero Section -->
    <div class="relative w-full h-[600px] flex items-center justify-center bg-black text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <!-- Image of diverse community/people -->
            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=2069&auto=format&fit=crop" alt="Community Impact" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">Community Impact</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto mb-8 font-light">
                Developing affordable housing that honors dignity, expands opportunity, and creates lasting value for entire communities.
            </p>
            <a href="/contact"
                class="inline-flex items-center justify-center px-8 py-3 bg-[#431499] text-white font-medium rounded-md hover:bg-[#35107a] transition-colors duration-200">
                Partner With Us
            </a>
        </div>
    </div>

    <!-- Stats Bar -->
    <div class="w-full bg-[#340c7f] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">Affordable Units Delivered</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">15</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">Communities Served</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">100+</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">Local Jobs Created</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Affordable Housing Mission</h2>
                <p class="text-gray-600 leading-relaxed">
                    At Rigor Equity, we believe everyone deserves access to quality housing. We're committed to developing and preserving affordable residential communities that
                    strengthen neighborhoods and create opportunity.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-all">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Affordable Housing Access</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Creating quality housing options that are financially accessible to working families and underserved communities.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-all">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Community Partnerships</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Collaborating with local organizations, municipalities, and residents to address housing needs holistically.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-all">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Quality of Life</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Designing and building homes that promote dignity, safety, and long-term community well-being.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-all">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Economic Opportunity</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Supporting local economic development through job creation and workforce training in construction trades.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- How We Make a Difference Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">How We Make a Difference</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed text-sm">
                        Our approach to affordable housing goes beyond compliance with regulatory requirements. We focus on creating vibrant, well-designed communities that residents
                        are proud to call home.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed text-sm">
                        Through innovative financing structures, cost-efficient construction methods, and strategic partnerships with municipalities and housing authorities, we deliver
                        projects that balance financial sustainability with deep social impact.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-[#340c7f] shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Quality-First Design</h4>
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    Every unit is designed with the same attention to detail, materials, and amenities as market-rate housing.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-[#340c7f] shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Long-Term Affordability</h4>
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    We structure projects with extended affordability commitments, ensuring communities benefit for decades.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="relative rounded-lg overflow-hidden shadow-xl h-[400px]">
                        <img src="https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=2065&auto=format&fit=crop" alt="Residential Community Aerial View"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Initiatives Section -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Key Initiatives</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18" />
                            <path d="M5 21V7l8-4 8 4v14" />
                            <path d="M13 21V12" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-3">Workforce Housing Development</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Building mixed-income residential communities that serve teachers, healthcare workers, first responders, and other essential professionals who are often priced
                        out of urban markets.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-3">Public-Private Partnerships</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Partnering with housing authorities and municipalities to deliver affordable housing projects funded through Low-Income Housing Tax Credits (LIHTC), HUD
                        programs, and other public financing mechanisms.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-3">Community Engagement</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Hosting community meetings and working sessions to ensure our developments reflect the needs and aspirations of the neighborhoods we serve.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Operations Section -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Chicago Community Impact FAQ</h2>
                <p class="text-xl text-gray-600">Frequently asked questions about how our development, construction, and public sector projects create lasting economic and social impact.</p>
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
    <div class="py-24 bg-gray-100 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Creating Opportunity Through Housing</h2>
            <p class="text-gray-600 mb-10 max-w-2xl mx-auto text-sm leading-relaxed">
                Housing stability is the foundation for economic mobility, educational achievement, and health outcomes. By delivering high-quality affordable housing, we're investing
                in the long-term success of individuals, families, and entire communities.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/public-sector"
                    class="inline-flex items-center justify-center px-8 py-3 bg-[#340c7f] text-white font-medium rounded-md hover:bg-[#2a0a66] transition-colors duration-200">
                    Public Sector Partnerships
                </a>
                <a href="/contact"
                    class="inline-flex items-center justify-center px-8 py-3 bg-white text-gray-900 border border-gray-300 font-medium rounded-md hover:bg-gray-50 transition-colors duration-200">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>
@endsection
