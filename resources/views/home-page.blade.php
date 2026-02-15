@extends('layouts.frontend')

@section('title', $settings['homepage_seo_title'] ?? 'Rigor Equity - Integrated Solutions. Lasting Impact.')
@section('meta_description', $settings['homepage_seo_description'] ?? '')
@section('meta_keywords', $settings['homepage_seo_keywords'] ?? '')

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
    <!-- Hero Section -->

    <div class="relative h-[450px] md:h-[550px] lg:h-[600px] flex items-center justify-center overflow-hidden"><iframe class="absolute inset-0 w-full h-full pointer-events-none"
            src="https://www.youtube.com/embed/QkvkbP_JNlg?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=QkvkbP_JNlg&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1&amp;enablejsapi=1&amp;origin={{ request()->getSchemeAndHttpHost() }}"
            title="Construction Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""
            style="width: 100vw; height: 56.25vw; min-height: 100vh; min-width: 177.77vh; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 1; transition: opacity 0.5s ease-in-out;"></iframe>
        <div class="absolute inset-0 pointer-events-none" style="box-shadow: rgba(0, 0, 0, 0.9) 0px 0px 100px 60px inset, rgba(0, 0, 0, 0.7) 0px 0px 60px 30px inset;"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="max-w-3xl animate-in fade-in slide-in-from-bottom-4 duration-700">
                <h1 class="text-3xl md:text-4xl lg:text-5xl mb-4 text-white leading-tight">{!! $settings['homepage_hero_title'] ?? 'Integrated Solutions.<br>Lasting Impact.' !!}</h1>
                <div class="text-lg md:text-xl lg:text-2xl mb-6 text-white/90">{!! $settings['homepage_hero_description'] ??
                    'Vertically integrated operator delivering end-to-end real estate solutions and building institutional-quality assets in overlooked urban submarkets.' !!}</div>
                <div class="flex flex-col sm:flex-row gap-4"><a href="/about"
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 bg-[#2e099a] text-white hover:bg-[#2e099a]/90 hover:scale-105 active:scale-95 transition-all duration-200 w-fit">About
                        Us<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform"
                            aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></a></div>
            </div>
        </div>
    </div>

    <!-- Stats Bar -->
    <section class="bg-[#240066] py-10 text-white relative z-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-white/20">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['homepage_stat_1_value'] ?? '$60M+' }}</div>
                    <div class="text-sm uppercase tracking-widest opacity-80 font-medium">{{ $settings['homepage_stat_1_label'] ?? 'Project Pipeline Value' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['homepage_stat_2_value'] ?? '4' }}</div>
                    <div class="text-sm uppercase tracking-widest opacity-80 font-medium">{{ $settings['homepage_stat_2_label'] ?? 'Integrated Service Lines' }}</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $settings['homepage_stat_3_value'] ?? '12+' }}</div>
                    <div class="text-sm uppercase tracking-widest opacity-80 font-medium">{{ $settings['homepage_stat_3_label'] ?? 'Capital Partners' }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- As Featured In -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="text-center mb-3 flex items-center justify-center gap-4">
            <div class="h-px w-10 md:w-16 bg-gradient-to-r from-transparent to-[#2e099a]"></div>
            <p class="text-foreground uppercase tracking-wide text-lg md:text-xl lg:text-xl mb-2" style="font-family: Inter, sans-serif;">As Featured In</p>
            <div class="h-px w-10 md:w-16 bg-gradient-to-l from-transparent to-[#2e099a]"></div>
        </div>
        <div class="overflow-hidden relative">
            <style>
                @keyframes scroll-logos {
                    0% {
                        transform: translate3d(0, 0, 0);
                    }

                    100% {
                        transform: translate3d(-50%, 0, 0);
                    }
                }

                .animate-scroll-logos {
                    animation: scroll-logos 5s linear infinite;
                    will-change: transform;
                }

                .logo-track {
                    display: flex;
                    width: fit-content;
                    transform: translate3d(0, 0, 0);
                    backface-visibility: hidden;
                    -webkit-backface-visibility: hidden;
                    perspective: 1000px;
                    -webkit-perspective: 1000px;
                }

                .logo-track>* {
                    flex-shrink: 0;
                }
            </style>
            @if (isset($featureClients) && $featureClients->count())
                <div class="logo-track animate-scroll-logos">
                    @foreach ($featureClients as $client)
                        <div class="flex items-center justify-center flex-shrink-0 px-8 md:px-12">
                            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name ?? 'Client' }}" class="h-8 md:h-8 w-auto">
                        </div>
                    @endforeach
                </div>
            @else
            @endif
        </div>
    </div>

    <!-- Vertically Integrated Service Lines -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-20">{{ $settings['homepage_services_title'] ?? 'Vertically Integrated to Deliver Value' }}</h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $settings['homepage_service_1_title'] ?? 'Investment Management' }}</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        {{ $settings['homepage_service_1_description'] ?? 'We manage real estate investments in Chicago to increase value through smart planning, careful oversight, and long-term growth strategies.' }}
                    </p>
                    <a href="/investment-management" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">
                        {{ $settings['homepage_service_1_button_text'] ?? 'Learn more' }}
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18" />
                            <path d="M5 21V7l8-4 8 4v14" />
                            <path d="M13 21V12" />
                            <path d="M21 12h-2" />
                            <path d="M12 2a10 10 0 0 1 10 10" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $settings['homepage_service_2_title'] ?? 'Construction' }}</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        {{ $settings['homepage_service_2_description'] ?? 'We plan and develop residential projects from start to finish, turning ideas into well-built communities.' }}
                    </p>
                    <a href="/construction" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">
                        {{ $settings['homepage_service_2_button_text'] ?? 'Explore construction' }}
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                            <line x1="3" y1="9" x2="21" y2="9" />
                            <line x1="9" y1="21" x2="9" y2="9" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $settings['homepage_service_3_title'] ?? 'Development' }}</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        {{ $settings['homepage_service_3_description'] ?? 'Identifying and executing high-impact development opportunities in emerging urban submarkets with institutional quality execution.' }}
                    </p>
                    <a href="/development" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">
                        {{ $settings['homepage_service_3_button_text'] ?? 'View projects' }}
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $settings['homepage_service_4_title'] ?? 'Public Sector' }}</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        {{ $settings['homepage_service_4_description'] ?? 'Partnering with municipalities and public entities to deliver community-focused real estate solutions and economic development.' }}
                    </p>
                    <a href="/public-sector" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">
                        {{ $settings['homepage_service_4_button_text'] ?? 'Our approach' }}
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="lg:w-2/3">
                <h2 class="lg:text-6xl text-4xl md:text-4xl font-bold text-gray-900 mb-6">The Rigor Equity Platform</h2>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    Our vertically integrated platform combines operational excellence with sustainable practices, delivering superior results across every aspect of real estate development and management.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row gap-16 max-w-6xl mx-auto">
                <div class="lg:w-1/2">
                    <div class="space-y-6" x-data="{ active: null }">
                        @foreach ($faqs as $index => $faq)
                            <div class="border-b border-gray-200 pb-4">
                                <button @click="active = (active === {{ $index }} ? null : {{ $index }})"
                                    class="flex items-center justify-between w-full text-left font-bold text-gray-900 hover:text-[#340c7f] text-lg group">
                                    <span>{{ $faq->question }}</span>
                                    <span class="text-2xl text-gray-400 group-hover:text-[#340c7f]" x-text="active === {{ $index }} ? '-' : '+'">+</span>
                                </button>
                                <div x-show="active === {{ $index }}" x-collapse>
                                    <div class="pt-4 text-gray-600 leading-relaxed">
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-24 h-24 bg-[#340c7f]/10 rounded-tl-3xl -z-10"></div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-[#340c7f]/10 rounded-br-3xl -z-10"></div>
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2670&auto=format&fit=crop" alt="Modern Building"
                            class="rounded-xl shadow-2xl w-full h-[500px] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Operations Section -->



    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">

            <!-- Operations Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center max-w-4xl mx-auto">
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="text-4xl font-bold text-[#340c7f] mb-2">95%+</div>
                    <div class="text-gray-500 font-medium uppercase tracking-wider text-sm">Occupancy Rate</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="text-4xl font-bold text-[#340c7f] mb-2">30+</div>
                    <div class="text-gray-500 font-medium uppercase tracking-wider text-sm">Team Members</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="text-4xl font-bold text-[#340c7f] mb-2">24/7</div>
                    <div class="text-gray-500 font-medium uppercase tracking-wider text-sm">Support</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Projects -->
    <section class="py-24 bg-white" x-data="{ activeProject: null }">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Chicago Construction Portfolio</h2>
                <p class="text-xl text-gray-600">Our projects in Chicago reflect our commitment to quality construction, smart investment, and sustainable residential growth.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-16 max-w-7xl mx-auto">
                @foreach ($projects as $project)
                    <!-- Project Card -->
                    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group">
                        <div class="h-3/4 bg-gray-200 relative overflow-hidden">
                            @if ($project->image)
                                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <span class="text-gray-400">No Image</span>
                                </div>
                            @endif

                            <div class="absolute top-4 left-4 bg-[#340c7f] text-white text-xs font-bold px-3 py-1.5 rounded uppercase tracking-wider">
                                {{ $project->status }}
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm p-3 rounded-lg flex items-center justify-between">
                                <span class="text-[#340c7f] font-bold text-sm">{{ $project->title }}</span>
                                <span class="text-xs font-semibold bg-gray-100 px-2 py-1 rounded">{{ $project->type }}</span>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-[#340c7f]">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <span>{{ $project->location ?? 'Location N/A' }}</span>
                            </div>

                            <div class="grid grid-cols-3 gap-2 text-center text-xs border-t border-gray-100 pt-6">
                                <div>
                                    <div class="font-bold text-gray-900 text-lg">{{ $project->units ?? '-' }}</div>
                                    <div class="text-gray-500 uppercase tracking-wide text-[10px]">Units</div>
                                </div>
                                <div class="border-l border-gray-100">
                                    <div class="font-bold text-gray-900 text-lg">{{ $project->sf ?? '-' }}</div>
                                    <div class="text-gray-500 uppercase tracking-wide text-[10px]">SF</div>
                                </div>
                                <div class="border-l border-gray-100">
                                    <div class="font-bold text-gray-900 text-lg">
                                        {{ $project->completion_date ? $project->completion_date->format('Y') : '-' }}
                                    </div>
                                    <div class="text-gray-500 uppercase tracking-wide text-[10px]">Completion</div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <button @click="activeProject = {{ json_encode($project) }}"
                                    class="block w-full text-center py-2.5 border border-[#340c7f] text-[#340c7f] font-semibold rounded hover:bg-[#340c7f] hover:text-white transition-colors text-sm">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('all-project') }}"
                    class="inline-block bg-[#340c7f] text-white font-semibold py-3 px-10 rounded-md hover:bg-[#240066] transition-colors shadow-lg hover:shadow-xl">
                    View All Projects
                </a>
            </div>

            <!-- Project Details Modal -->
            <div x-show="activeProject" style="display: none;" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">

                <!-- Backdrop -->
                <div class="fixed inset-0 bg-black/60 transition-opacity backdrop-blur-sm" @click="activeProject = null"></div>

                <!-- Modal Panel -->
                <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden transform transition-all flex flex-col md:flex-row max-h-[90vh]"
                    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                    <!-- Close Button -->
                    <button @click="activeProject = null"
                        class="absolute top-4 right-4 z-10 p-2 bg-white/50 backdrop-blur-sm rounded-full hover:bg-white text-gray-600 hover:text-gray-900 transition-colors shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 18 18" />
                        </svg>
                    </button>

                    <!-- Image Section (Left/Top) -->
                    <div class="w-full md:w-1/2 bg-gray-100 relative h-64 md:h-auto">
                        <template x-if="activeProject?.image_url">
                            <img :src="activeProject.image_url" :alt="activeProject.title" class="w-full h-full object-cover">
                        </template>
                        <template x-if="!activeProject?.image_url">
                            <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-200">
                                <span class="text-lg">No Image Available</span>
                            </div>
                        </template>
                        <div class="absolute top-4 left-4 bg-[#340c7f] text-white text-xs font-bold px-3 py-1.5 rounded uppercase tracking-wider shadow-sm"
                            x-text="activeProject?.status"></div>
                    </div>

                    <!-- Content Section (Right/Bottom) -->
                    <div class="w-full md:w-1/2 p-6 md:p-8 overflow-y-auto bg-white">
                        <div class="mb-6">
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 mb-3" x-text="activeProject?.type"></span>
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2 leading-tight" x-text="activeProject?.title"></h3>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-[#340c7f]">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <span x-text="activeProject?.location || 'Location N/A'"></span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                                <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Units</div>
                                <div class="font-bold text-gray-900 text-lg" x-text="activeProject?.units || '-'"></div>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                                <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Square Feet</div>
                                <div class="font-bold text-gray-900 text-lg" x-text="activeProject?.sf || '-'"></div>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                                <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Completion</div>
                                <div class="font-bold text-gray-900 text-lg" x-text="activeProject?.completion_date ? new Date(activeProject.completion_date).getFullYear() : '-'">
                                </div>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                                <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Value</div>
                                <div class="font-bold text-gray-900 text-lg" x-text="activeProject?.value || '-'"></div>
                            </div>
                        </div>

                        <template x-if="activeProject?.partners && activeProject.partners.length > 0">
                            <div class="border-t border-gray-100 pt-6">
                                <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Partners</h4>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="partner in activeProject.partners">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100"
                                            x-text="partner"></span>
                                    </template>
                                </div>
                            </div>
                        </template>

                        <!-- Optional: Description Placeholder if model doesn't have it yet -->
                        <div class="mt-6 text-gray-600 text-sm leading-relaxed border-t border-gray-100 pt-6">
                            <p>This project represents our commitment to excellence in real estate development, featuring state-of-the-art amenities and sustainable design principles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investor & Partners -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-10 max-w-6xl mx-auto">
                <!-- Investor Relations -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 flex flex-col h-full">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Investor Relations</h2>
                    <p class="text-gray-600 mb-10 leading-relaxed">
                        We provide transparent communication and comprehensive resources to keep our investors informed and engaged. Our commitment to excellence extends to every
                        aspect of our investor relations.
                    </p>
                    <div class="space-y-6 mb-10 flex-grow">
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-lg bg-[#340c7f]/10 flex items-center justify-center text-[#340c7f] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 3v18h18" />
                                    <path d="m19 9-5 5-4-4-3 3" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Performance Reports</h4>
                                <p class="text-sm text-gray-500 mt-1">Quarterly reports with detailed portfolio performance metrics.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-lg bg-[#340c7f]/10 flex items-center justify-center text-[#340c7f] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Investment Documents</h4>
                                <p class="text-sm text-gray-500 mt-1">Access offering memorandums and investment materials securely.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-lg bg-[#340c7f]/10 flex items-center justify-center text-[#340c7f] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Investor Events</h4>
                                <p class="text-sm text-gray-500 mt-1">Join us for upcoming updates and networking opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="w-full block text-center bg-[#340c7f] text-white font-semibold py-3.5 px-6 rounded-lg hover:bg-[#240066] transition-colors shadow-md">
                        Schedule a Meeting
                    </a>
                </div>

                <!-- Partnership Opportunities -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 flex flex-col h-full">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Partnership Opportunities</h2>
                    <p class="text-gray-600 mb-10 leading-relaxed">
                        Multiple ways to collaborate with Rigor Equity's vertically integrated platform to drive value and mutual growth.
                    </p>
                    <div class="space-y-6 mb-10 flex-grow">
                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 font-bold text-sm flex-shrink-0">01</div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Equity Partner</h4>
                                <p class="text-sm text-gray-500 mt-1">Co-invest in institutional-quality real estate opportunities with target 15-20% equity multiples.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 font-bold text-sm flex-shrink-0">02</div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Debt Partner</h4>
                                <p class="text-sm text-gray-500 mt-1">Provide construction or acquisition financing secured by premium assets.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 font-bold text-sm flex-shrink-0">03</div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Joint Venture</h4>
                                <p class="text-sm text-gray-500 mt-1">Partner on development projects leveraging our vertically integrated platform.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 font-bold text-sm flex-shrink-0">04</div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Employment Partner</h4>
                                <p class="text-sm text-gray-500 mt-1">Collaborate on general op, construction and value-add repositioning opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="w-full block text-center bg-[#240066] text-white font-semibold py-3.5 px-6 rounded-lg hover:bg-[#1a0b4b] transition-colors shadow-md">
                        Explore Partnership Opportunities
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Start --}}
    <section class="py-20 pt-10" x-data="{ activeAccordion: '' }">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16 transition-all duration-700 opacity-100 translate-y-0">
                <h2 class="text-2xl md:text-3xl lg:text-4xl mb-3 md:mb-4">Chicago Residential Construction Company FAQ</h2>
                <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">Common questions about our residential construction services, project management process, permits, timelines, and quality standards.</p>
            </div>
            <div class="hidden md:block">
                <div data-slot="accordion" class="transition-all duration-700 opacity-100 translate-y-0" data-orientation="vertical">
                    @foreach ($questions as $question)
                        <div x-bind:data-state="activeAccordion === 'item-{{ $loop->iteration }}' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-item"
                            class="border border-gray-200 rounded-lg mb-4 px-6 bg-white hover:shadow-md transition-shadow">
                            <h3 data-orientation="vertical" x-bind:data-state="activeAccordion === 'item-{{ $loop->iteration }}' ? 'open' : 'closed'" class="flex">
                                <button type="button" @click="activeAccordion = activeAccordion === 'item-{{ $loop->iteration }}' ? '' : 'item-{{ $loop->iteration }}'"
                                    x-bind:aria-expanded="activeAccordion === 'item-{{ $loop->iteration }}'"
                                    x-bind:data-state="activeAccordion === 'item-{{ $loop->iteration }}' ? 'open' : 'closed'" data-orientation="vertical"
                                    data-slot="accordion-trigger"
                                    class="focus-visible:border-ring focus-visible:ring-ring/50 flex flex-1 items-start justify-between gap-4 rounded-md text-left text-sm font-medium transition-all outline-none focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 [&[data-state=open]>svg]:rotate-180 hover:no-underline py-6">
                                    <div class="flex items-center gap-4 text-left">
                                        <div class="bg-[#2e099a] w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check h-6 w-6 text-white"
                                                aria-hidden="true">
                                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                <path d="m9 14 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-xl">{{ $question->title }}</div>
                                            <div class="text-sm text-muted-foreground mt-1">{{ $question->sub_title }}</div>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div x-show="activeAccordion === 'item-{{ $loop->iteration }}'" x-collapse x-cloak
                                x-bind:data-state="activeAccordion === 'item-{{ $loop->iteration }}' ? 'open' : 'closed'" role="region" data-orientation="vertical"
                                data-slot="accordion-content" class="overflow-hidden text-sm mb-2">
                                {!! $question->description !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="md:hidden">
                <div data-slot="accordion" data-orientation="vertical">
                    <div x-bind:data-state="activeAccordion === 'item-1' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-item"
                        class="border border-gray-200 rounded-lg mb-3 px-4 bg-white">
                        <h3 data-orientation="vertical" x-bind:data-state="activeAccordion === 'item-1' ? 'open' : 'closed'" class="flex">
                            <button type="button" @click="activeAccordion = activeAccordion === 'item-1' ? '' : 'item-1'" x-bind:aria-expanded="activeAccordion === 'item-1'"
                                x-bind:data-state="activeAccordion === 'item-1' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-trigger"
                                class="focus-visible:border-ring focus-visible:ring-ring/50 flex flex-1 items-start justify-between gap-4 rounded-md text-left text-sm font-medium transition-all outline-none focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 [&[data-state=open]>svg]:rotate-180 hover:no-underline py-4">
                                <div class="flex items-center gap-3 text-left">
                                    <div class="bg-[#2e099a] w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-clipboard-check h-5 w-5 text-white" aria-hidden="true">
                                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                            <path d="m9 14 2 2 4-4"></path>
                                        </svg></div>
                                    <div>
                                        <div class="text-base">Property Management</div>
                                        <div class="text-xs text-muted-foreground mt-0.5">24/7 tenant services and proactive oversight</div>
                                    </div>
                                </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                        </h3>
                        <div x-show="activeAccordion === 'item-1'" x-collapse x-cloak x-bind:data-state="activeAccordion === 'item-1' ? 'open' : 'closed'" role="region"
                            data-orientation="vertical" data-slot="accordion-content" class="overflow-hidden text-sm">
                            <div class="pb-4 pt-0 text-muted-foreground">
                                <p class="mb-2">Hands-on operational oversight with dedicated property management teams driving NOI growth and value creation.</p>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>24/7 Maintenance Support</li>
                                    <li>Tenant Relations & Retention</li>
                                    <li>Lease Administration</li>
                                    <li>Vendor Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div x-bind:data-state="activeAccordion === 'item-2' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-item"
                        class="border border-gray-200 rounded-lg mb-3 px-4 bg-white">
                        <h3 data-orientation="vertical" x-bind:data-state="activeAccordion === 'item-2' ? 'open' : 'closed'" class="flex">
                            <button type="button" @click="activeAccordion = activeAccordion === 'item-2' ? '' : 'item-2'" x-bind:aria-expanded="activeAccordion === 'item-2'"
                                x-bind:data-state="activeAccordion === 'item-2' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-trigger"
                                class="focus-visible:border-ring focus-visible:ring-ring/50 flex flex-1 items-start justify-between gap-4 rounded-md text-left text-sm font-medium transition-all outline-none focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 [&[data-state=open]>svg]:rotate-180 hover:no-underline py-4">
                                <div class="flex items-center gap-3 text-left">
                                    <div class="bg-[#2e099a] w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-chart-line h-5 w-5 text-white" aria-hidden="true">
                                            <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                            <path d="m19 9-5 5-4-4-3 3"></path>
                                        </svg></div>
                                    <div>
                                        <div class="text-base">Asset Management</div>
                                        <div class="text-xs text-muted-foreground mt-0.5">Data-driven performance optimization</div>
                                    </div>
                                </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                        </h3>
                        <div x-show="activeAccordion === 'item-2'" x-collapse x-cloak x-bind:data-state="activeAccordion === 'item-2' ? 'open' : 'closed'" role="region"
                            data-orientation="vertical" data-slot="accordion-content" class="overflow-hidden text-sm">
                            <div class="pb-4 pt-0 text-muted-foreground">
                                <p class="mb-2">Strategic planning and execution to maximize property value and investment returns throughout the ownership lifecycle.</p>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Capital Improvement Planning</li>
                                    <li>Expense Management</li>
                                    <li>Revenue Optimization</li>
                                    <li>Market Analysis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div x-bind:data-state="activeAccordion === 'item-3' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-item"
                        class="border border-gray-200 rounded-lg mb-3 px-4 bg-white">
                        <h3 data-orientation="vertical" x-bind:data-state="activeAccordion === 'item-3' ? 'open' : 'closed'" class="flex">
                            <button type="button" @click="activeAccordion = activeAccordion === 'item-3' ? '' : 'item-3'" x-bind:aria-expanded="activeAccordion === 'item-3'"
                                x-bind:data-state="activeAccordion === 'item-3' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-trigger"
                                class="focus-visible:border-ring focus-visible:ring-ring/50 flex flex-1 items-start justify-between gap-4 rounded-md text-left text-sm font-medium transition-all outline-none focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 [&[data-state=open]>svg]:rotate-180 hover:no-underline py-4">
                                <div class="flex items-center gap-3 text-left">
                                    <div class="bg-[#2e099a] w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-file-text h-5 w-5 text-white" aria-hidden="true">
                                            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path>
                                            <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                        </svg></div>
                                    <div>
                                        <div class="text-base">Financial Reporting &amp; Compliance</div>
                                        <div class="text-xs text-muted-foreground mt-0.5">Transparent, institutional-grade reporting</div>
                                    </div>
                                </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                        </h3>
                        <div x-show="activeAccordion === 'item-3'" x-collapse x-cloak x-bind:data-state="activeAccordion === 'item-3' ? 'open' : 'closed'" role="region"
                            data-orientation="vertical" data-slot="accordion-content" class="overflow-hidden text-sm">
                            <div class="pb-4 pt-0 text-muted-foreground">
                                <p class="mb-2">Institutional-grade financial reporting providing transparency and accountability to all stakeholders.</p>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Monthly Financial Statements</li>
                                    <li>Budgeting & Forecasting</li>
                                    <li>Tax Preparation Support</li>
                                    <li>Regulatory Compliance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div x-bind:data-state="activeAccordion === 'item-4' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-item"
                        class="border border-gray-200 rounded-lg mb-3 px-4 bg-white">
                        <h3 data-orientation="vertical" x-bind:data-state="activeAccordion === 'item-4' ? 'open' : 'closed'" class="flex">
                            <button type="button" @click="activeAccordion = activeAccordion === 'item-4' ? '' : 'item-4'" x-bind:aria-expanded="activeAccordion === 'item-4'"
                                x-bind:data-state="activeAccordion === 'item-4' ? 'open' : 'closed'" data-orientation="vertical" data-slot="accordion-trigger"
                                class="focus-visible:border-ring focus-visible:ring-ring/50 flex flex-1 items-start justify-between gap-4 rounded-md text-left text-sm font-medium transition-all outline-none focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 [&[data-state=open]>svg]:rotate-180 hover:no-underline py-4">
                                <div class="flex items-center gap-3 text-left">
                                    <div class="bg-[#2e099a] w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-headphones h-5 w-5 text-white" aria-hidden="true">
                                            <path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                            </path>
                                        </svg></div>
                                    <div>
                                        <div class="text-base">Tenant Services &amp; Experience</div>
                                        <div class="text-xs text-muted-foreground mt-0.5">Premium resident experience delivery</div>
                                    </div>
                                </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                        </h3>
                        <div x-show="activeAccordion === 'item-4'" x-collapse x-cloak x-bind:data-state="activeAccordion === 'item-4' ? 'open' : 'closed'" role="region"
                            data-orientation="vertical" data-slot="accordion-content" class="overflow-hidden text-sm">
                            <div class="pb-4 pt-0 text-muted-foreground">
                                <p class="mb-2">Creating vibrant communities through exceptional service and curated tenant experiences.</p>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Community Events & Activations</li>
                                    <li>Digital Tenant Portal</li>
                                    <li>Concierge Services</li>
                                    <li>Feedback & Satisfaction Surveys</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End --}}

    <!-- News Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get Construction News & Insights Update</h2>
                <p class="text-xl text-gray-600">Follow construction trends and project updates, with expert insights from the Rigor Equity team.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto mb-16">
                @if ($news->isNotEmpty())
                    @php
                        $featuredNews = $news->first();
                        $sideNews = $news->slice(1);
                    @endphp

                    <!-- Featured Article -->
                    <div class="md:col-span-2 lg:col-span-1">
                        <div class="relative h-full min-h-[400px] rounded-xl overflow-hidden group">
                            <img src="{{ $featuredNews->thumbnail ? asset('storage/' . $featuredNews->thumbnail) : 'https://images.unsplash.com/photo-1504384308090-c54be38558bd?q=80&w=2670&auto=format&fit=crop' }}"
                                alt="{{ $featuredNews->title }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-8 text-white">
                                <span class="bg-[#340c7f] text-xs font-bold px-3 py-1 rounded mb-4 inline-block">{{ $featuredNews->category->name ?? 'News' }}</span>
                                <div class="flex items-center gap-4 text-sm text-white/80 mb-3">
                                    <span>{{ $featuredNews->created_at->format('F j, Y') }}</span>
                                    <span>{{ ceil(str_word_count(strip_tags($featuredNews->description)) / 200) }} min read</span>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-bold mb-4 leading-tight group-hover:underline decoration-2 underline-offset-4">
                                    <a href="{{ route('news.show', $featuredNews->slug) }}">
                                        {{ $featuredNews->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-300 line-clamp-3 mb-6">
                                    {{ Str::limit(strip_tags($featuredNews->description), 150) }}
                                </p>
                                <a href="{{ route('news.show', $featuredNews->slug) }}" class="inline-flex items-center font-semibold hover:text-[#340c7f] transition-colors">Read
                                    More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>

                    <!-- Side Articles -->
                    <div class="space-y-8">
                        @foreach ($sideNews as $item)
                            <div class="flex gap-6 group">
                                <div class="w-1/3 h-32 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : 'https://images.unsplash.com/photo-1590674899505-1c5c41951f89?q=80&w=2670&auto=format&fit=crop' }}"
                                        alt="{{ $item->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                </div>
                                <div class="w-2/3">
                                    <span class="text-[#340c7f] text-xs font-bold uppercase tracking-wide mb-2 block">{{ $item->category->name ?? 'News' }}</span>
                                    <h4 class="text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-[#340c7f] transition-colors">
                                        <a href="{{ route('news.show', $item->slug) }}">
                                            {{ $item->title }}
                                        </a>
                                    </h4>
                                    <p class="text-sm text-gray-500 line-clamp-2 mb-2">{{ Str::limit(strip_tags($item->description), 100) }}</p>
                                    <span class="text-xs text-gray-400">{{ $item->created_at->format('M j, Y') }} • {{ ceil(str_word_count(strip_tags($item->description)) / 200) }}
                                        min read</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="col-span-2 text-center text-gray-500 py-10">
                        No news articles available at the moment.
                    </div>
                @endif
            </div>

            <div class="text-center">
                <a href="/news" class="inline-block bg-[#340c7f] text-white font-semibold py-3 px-10 rounded-md hover:bg-[#240066] transition-colors shadow-lg hover:shadow-xl">
                    View All Insights
                </a>
            </div>
        </div>
    </section>
@endsection
