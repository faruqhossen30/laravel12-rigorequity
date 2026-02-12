@extends('layouts.frontend')

@section('title', $settings['development_seo_title'] ?? 'Development - Rigor Equity')

@section('content')
    <!-- Hero Section -->
    <div class="relative w-full h-[600px] flex items-center justify-center bg-black text-white overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ $settings['development_hero_bg_image'] ?? 'https://images.unsplash.com/photo-1449157291145-7efd050a4d0e?q=80&w=2070&auto=format&fit=crop' }}" alt="Development Site" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">{{ $settings['development_hero_title'] ?? 'Development' }}</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto mb-8 font-light leading-relaxed">
                {!! nl2br(e($settings['development_hero_description'] ?? 'Transforming land and opportunity into thriving communities and high-performing assets through strategic development expertise.')) !!}
            </p>
            <a href="{{ $settings['development_hero_button_url'] ?? '/contact' }}"
                class="inline-flex items-center justify-center px-8 py-3 bg-[#431499] text-white font-medium rounded-md hover:bg-[#35107a] transition-colors duration-200">
                {{ $settings['development_hero_button_text'] ?? 'Discuss a Project' }}
            </a>
        </div>
    </div>

    <!-- Stats Bar -->
    <div class="w-full bg-[#340c7f] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['development_stat_1_value'] ?? '200K SF' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['development_stat_1_label'] ?? 'Under Development' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['development_stat_2_value'] ?? '$60M' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['development_stat_2_label'] ?? 'Development Pipeline' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['development_stat_3_value'] ?? '20+' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['development_stat_3_label'] ?? 'Projects Completed' }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Strategic Development Approach Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $settings['development_approach_title'] ?? 'Strategic Development Approach' }}</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {!! nl2br(e($settings['development_approach_desc_1'] ?? 'At Rigor Equity, we take a disciplined, data-driven approach to real estate development. We identify emerging trends early, conduct rigorous due diligence, and execute with precision to deliver exceptional returns.')) !!}
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        {!! nl2br(e($settings['development_approach_desc_2'] ?? 'Our development team combines deep local market knowledge with institutional-grade processes to de-risk projects and create lasting value for our investors and communities.')) !!}
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 mt-1 text-[#340c7f]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-gray-900">{{ $settings['development_app_item_1_title'] ?? 'Sustainable Development' }}</h4>
                                <p class="text-sm text-gray-600">{!! nl2br(e($settings['development_app_item_1_text'] ?? 'ESG-focused approach with LEED and sustainability certifications.')) !!}</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 mt-1 text-[#340c7f]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-gray-900">{{ $settings['development_app_item_2_title'] ?? 'Speed to Market' }}</h4>
                                <p class="text-sm text-gray-600">{!! nl2br(e($settings['development_app_item_2_text'] ?? 'Streamlined processes and strong partner relationships accelerate development timelines.')) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="w-full lg:w-1/2">
                    <img src="{{ $settings['development_approach_image'] ?? 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2089&auto=format&fit=crop' }}" alt="Development Blueprint"
                        class="rounded-lg shadow-xl w-full h-auto object-cover grayscale">
                </div>
            </div>
        </div>
    </section>

    <!-- Development Services Section -->
    <section class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $settings['development_services_title'] ?? 'Development Services' }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20" />
                            <path d="M2 12h20" />
                            <path d="m12 2 4 4" />
                            <path d="m12 2-4 4" />
                            <path d="m12 22 4-4" />
                            <path d="m12 22-4-4" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['development_serv_1_title'] ?? 'Site Selection & Analysis' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['development_serv_1_text'] ?? 'Comprehensive market research and feasibility studies to identify optimal development opportunities.')) !!}
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['development_serv_2_title'] ?? 'Entitlements & Approvals' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['development_serv_2_text'] ?? 'Expert navigation of zoning, permitting, and regulatory processes to accelerate project timelines.')) !!}
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" x2="12" y1="20" y2="10" />
                            <line x1="18" x2="18" y1="20" y2="4" />
                            <line x1="6" x2="6" y1="20" y2="16" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['development_serv_3_title'] ?? 'Financial Structuring' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['development_serv_3_text'] ?? 'Creative capital solutions including equity partnerships, debt financing, and tax incentive strategies.')) !!}
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                            <line x1="3" y1="9" x2="21" y2="9" />
                            <line x1="9" y1="21" x2="9" y2="9" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['development_serv_4_title'] ?? 'Master Planning' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['development_serv_4_text'] ?? 'Strategic land use planning and design coordination to maximize value and community impact.')) !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Development Process -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $settings['development_process_title'] ?? 'Our Development Process' }}</h2>
                <p class="text-gray-600 text-lg">
                    {!! nl2br(e($settings['development_process_description'] ?? 'A proven framework for successful project delivery from concept to completion.')) !!}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <!-- Step 1 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">1</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">{{ $settings['development_step_1_title'] ?? 'Acquisition' }}</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        {!! nl2br(e($settings['development_step_1_text'] ?? 'Identify and secure high-potential sites through market analysis and relationships.')) !!}
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">2</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">{{ $settings['development_step_2_title'] ?? 'Entitlements' }}</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        {!! nl2br(e($settings['development_step_2_text'] ?? 'Secure necessary approvals, zoning, and permits for optimal project design.')) !!}
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">3</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">{{ $settings['development_step_3_title'] ?? 'Design' }}</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        {!! nl2br(e($settings['development_step_3_text'] ?? 'Collaborate with architects and engineers to finalize project specifications.')) !!}
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">4</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">{{ $settings['development_step_4_title'] ?? 'Construction' }}</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        {!! nl2br(e($settings['development_step_4_text'] ?? 'Execute build with rigorous oversight and quality control standards.')) !!}
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">5</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">{{ $settings['development_step_5_title'] ?? 'Lease-Up' }}</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        {!! nl2br(e($settings['development_step_5_text'] ?? 'Marketing and leasing to achieve stabilized occupancy and optimize returns.')) !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

    <!-- Partner Section -->
    <section class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">{{ $settings['development_cta_title'] ?? 'Partner on Your Next Development' }}</h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    {!! nl2br(e($settings['development_cta_text'] ?? 'Whether you have a site, an idea, or capital to deploy, let\'s explore how we can collaborate on your next development project.')) !!}
                </p>
                <a href="{{ $settings['development_cta_button_url'] ?? '/contact' }}"
                    class="inline-flex items-center justify-center px-8 py-3 bg-[#340c7f] text-white font-medium rounded-md hover:bg-[#2a0966] transition-colors duration-200">
                    {{ $settings['development_cta_button_text'] ?? 'Discuss a Project' }}
                </a>
            </div>
        </div>
    </section>
@endsection
