@extends('layouts.frontend')

@section('title', $settings['construction_seo_title'] ?? 'Construction - Rigor Equity')

@section('content')
    <!-- Hero Section -->
    <div class="relative w-full h-[600px] flex items-center justify-center bg-black text-white overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ $settings['construction_hero_bg_image'] ?? 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop' }}" alt="Construction Site" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">{{ $settings['construction_hero_title'] ?? 'Construction' }}</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto mb-8 font-light">
                {!! nl2br(e($settings['construction_hero_description'] ?? 'Building excellence through innovative construction solutions, expert project management, and unwavering commitment to quality.')) !!}
            </p>
            <a href="{{ $settings['construction_hero_button_url'] ?? '/contact' }}"
                class="inline-flex items-center justify-center px-8 py-3 bg-[#431499] text-white font-medium rounded-md hover:bg-[#35107a] transition-colors duration-200">
                {{ $settings['construction_hero_button_text'] ?? 'Request a Quote' }}
            </a>
        </div>
    </div>

    <!-- Stats Bar -->
    <div class="w-full bg-[#340c7f] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['construction_stat_1_value'] ?? '50+' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['construction_stat_1_label'] ?? 'Projects Completed' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['construction_stat_2_value'] ?? '98%' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['construction_stat_2_label'] ?? 'On-Time Delivery' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['construction_stat_3_value'] ?? '$50M+' }}</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">{{ $settings['construction_stat_3_label'] ?? 'Construction Value' }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Construction Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $settings['construction_services_title'] ?? 'Construction Services' }}</h2>
                <p class="text-gray-600 text-lg">
                    {!! nl2br(e($settings['construction_services_description'] ?? 'Comprehensive construction capabilities to bring your vision to life with precision and expertise.')) !!}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18" />
                            <path d="M5 21V7l8-4 8 4v14" />
                            <path d="M17 21v-8.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V21" />
                            <path d="M19 8v.01" />
                            <path d="M19 12v.01" />
                            <path d="M14 6v.01" />
                            <path d="M14 10v.01" />
                            <path d="M9 10v.01" />
                            <path d="M9 14v.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $settings['construction_serv_1_title'] ?? 'Ground-Up Development' }}</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        {!! nl2br(e($settings['construction_serv_1_text'] ?? 'Full-service construction management from site preparation through final delivery.')) !!}
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $settings['construction_serv_2_title'] ?? 'Project Management' }}</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        {!! nl2br(e($settings['construction_serv_2_text'] ?? 'Comprehensive oversight ensuring projects are delivered on time and within budget.')) !!}
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect width="16" height="20" x="4" y="2" rx="2" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="M4 12h16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $settings['construction_serv_3_title'] ?? 'Logistics & Coordination' }}</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        {!! nl2br(e($settings['construction_serv_3_text'] ?? 'Expert coordination of all trades, materials, and schedules for seamless execution.')) !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $settings['construction_process_title'] ?? 'Our Process' }}</h2>
                <p class="text-gray-600 text-lg">
                    {!! nl2br(e($settings['construction_process_description'] ?? 'A proven methodology that ensures every project is delivered with excellence.')) !!}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center relative">
                    <div class="w-16 h-16 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 relative z-10">1</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['construction_step_1_title'] ?? 'Planning & Design' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['construction_step_1_text'] ?? 'Collaborative planning with architects, engineers, and stakeholders to refine project scope and specifications.')) !!}
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center relative">
                    <div class="w-16 h-16 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 relative z-10">2</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['construction_step_2_title'] ?? 'Pre-Construction' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['construction_step_2_text'] ?? 'Detailed budgeting, scheduling, and procurement to ensure efficient project execution.')) !!}
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center relative">
                    <div class="w-16 h-16 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 relative z-10">3</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['construction_step_3_title'] ?? 'Construction' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['construction_step_3_text'] ?? 'Expert management of all trades with rigorous quality control and safety protocols.')) !!}
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center relative">
                    <div class="w-16 h-16 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 relative z-10">4</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $settings['construction_step_4_title'] ?? 'Delivery & Closeout' }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {!! nl2br(e($settings['construction_step_4_text'] ?? 'Final inspections, documentation, and seamless handover to ensure complete satisfaction.')) !!}
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
    <!-- Commitment to Quality & Safety -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $settings['construction_quality_title'] ?? 'Commitment to Quality & Safety' }}</h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        {!! nl2br(e($settings['construction_quality_description'] ?? 'Safety is our top priority on every job site. We maintain rigorous safety standards and training programs to protect our workers, partners, and communities.')) !!}
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#340c7f" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-gray-900">{{ $settings['construction_qual_1_title'] ?? 'On-Time Performance' }}</h4>
                                <p class="text-sm text-gray-600">{!! nl2br(e($settings['construction_qual_1_text'] ?? '98% of projects delivered on or ahead of schedule.')) !!}</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#340c7f" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <polyline points="22 4 12 14.01 9 11.01" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-gray-900">{{ $settings['construction_qual_2_title'] ?? 'Quality Assurance' }}</h4>
                                <p class="text-sm text-gray-600">{!! nl2br(e($settings['construction_qual_2_text'] ?? 'Comprehensive quality control at every phase of construction.')) !!}</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#340c7f" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-gray-900">{{ $settings['construction_qual_3_title'] ?? 'Safety First' }}</h4>
                                <p class="text-sm text-gray-600">{!! nl2br(e($settings['construction_qual_3_text'] ?? 'Industry-leading safety record with continuous training programs.')) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Get Started Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $settings['construction_cta_title'] ?? 'Get Started' }}</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        {!! nl2br(e($settings['construction_cta_text'] ?? 'Ready to begin your construction project? Contact our team to discuss your needs and receive a detailed proposal.')) !!}
                    </p>
                    <a href="{{ $settings['construction_cta_button_url'] ?? '/contact' }}"
                        class="flex items-center justify-center w-full py-3 bg-[#340c7f] text-white font-medium rounded-md hover:bg-[#2a0966] transition-colors duration-200">
                        {{ $settings['construction_cta_button_text'] ?? 'Request a Consultation' }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
