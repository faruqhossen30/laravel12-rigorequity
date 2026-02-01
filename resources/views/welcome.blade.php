@extends('layouts.frontend')

@section('title', 'Rigor Equity - Integrated Solutions. Lasting Impact.')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[600px] flex items-center text-white">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
             <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2670&auto=format&fit=crop" alt="Construction Site" class="w-full h-full object-cover">
             <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Integrated Solutions.<br>Lasting Impact.</h1>
                <p class="text-lg md:text-xl text-gray-200 max-w-2xl mb-8 leading-relaxed">
                    Vertically integrated operator delivering end-to-end real estate solutions and building institutional-quality assets in overlooked urban submarkets.
                </p>
                <a href="/about" class="inline-flex items-center bg-[#340c7f] hover:bg-[#240066] text-white font-semibold py-3 px-8 rounded-md transition-colors">
                    About Us <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="bg-[#240066] py-10 text-white relative z-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-white/20">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">$60M+</div>
                    <div class="text-sm uppercase tracking-widest opacity-80 font-medium">Project Pipeline Value</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">4</div>
                    <div class="text-sm uppercase tracking-widest opacity-80 font-medium">Integrated Service Lines</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">12+</div>
                    <div class="text-sm uppercase tracking-widest opacity-80 font-medium">Capital Partners</div>
                </div>
            </div>
        </div>
    </section>

    <!-- As Featured In -->
    <section class="py-12 border-b border-gray-100 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-widest mb-10 relative inline-block">
                As Featured In
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-0.5 bg-gray-300"></span>
            </h3>
            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-20 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <span class="text-xl font-bold font-serif text-gray-800 flex items-center gap-1"><span class="bg-blue-600 text-white px-1">BUSINESS</span> INSIDER</span>
                <span class="text-xl font-bold font-sans text-purple-900">Yahoo! <span class="text-gray-600 font-normal">finance</span></span>
                <span class="text-xl font-bold font-serif text-black italic">Chicago Tribune</span>
                <span class="text-xl font-bold font-serif text-gray-900 border-2 border-black p-1 text-sm">NY Weekly</span>
                <span class="text-xl font-bold font-sans text-gray-800">Pylot</span>
            </div>
        </div>
    </section>

    <!-- Vertically Integrated Service Lines -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-16">Vertically Integrated to Deliver Value</h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                         <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Investment Management</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">Strategic capital deployment across value-add and opportunistic multifamily assets, delivering superior risk-adjusted returns.</p>
                    <a href="/investment-management" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">Learn more <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                         <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M13 21V12"/><path d="M21 12h-2"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Construction</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">End-to-end construction management from ground-up development to complex renovations, delivering quality on time and on budget.</p>
                    <a href="/construction" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">Explore construction <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                         <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Development</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">Identifying and executing high-impact development opportunities in emerging urban submarkets with institutional quality execution.</p>
                    <a href="/development" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">View projects <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
                <!-- Card 4 -->
                <div class="bg-white p-10 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-14 h-14 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                         <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Public Sector</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">Partnering with municipalities and public entities to deliver community-focused real estate solutions and economic development.</p>
                    <a href="/public-sector" class="text-[#340c7f] font-semibold hover:underline inline-flex items-center group-hover:translate-x-1 transition-transform">Our approach <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16 items-center max-w-6xl mx-auto">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">The Rigor Equity Platform</h2>
                    <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                        Our vertically integrated platform combines operational excellence with sustainable practices, delivering superior results across every aspect of real estate development and management.
                    </p>

                    <div class="space-y-6">
                        <div class="border-b border-gray-200 pb-4">
                            <button class="flex items-center justify-between w-full text-left font-bold text-gray-900 hover:text-[#340c7f] text-lg group">
                                <span>Sustainability & Energy Efficiency</span>
                                <span class="text-2xl text-gray-400 group-hover:text-[#340c7f]">+</span>
                            </button>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <button class="flex items-center justify-between w-full text-left font-bold text-gray-900 hover:text-[#340c7f] text-lg group">
                                <span>Advanced Energy Solutions</span>
                                <span class="text-2xl text-gray-400 group-hover:text-[#340c7f]">+</span>
                            </button>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <button class="flex items-center justify-between w-full text-left font-bold text-gray-900 hover:text-[#340c7f] text-lg group">
                                <span>Construction Logistics Excellence</span>
                                <span class="text-2xl text-gray-400 group-hover:text-[#340c7f]">+</span>
                            </button>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <button class="flex items-center justify-between w-full text-left font-bold text-gray-900 hover:text-[#340c7f] text-lg group">
                                <span>Technology & Innovation</span>
                                <span class="text-2xl text-gray-400 group-hover:text-[#340c7f]">+</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-24 h-24 bg-[#340c7f]/10 rounded-tl-3xl -z-10"></div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-[#340c7f]/10 rounded-br-3xl -z-10"></div>
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2670&auto=format&fit=crop" alt="Modern Building" class="rounded-xl shadow-2xl w-full h-[500px] object-cover">
                    </div>
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

            <div class="max-w-4xl mx-auto space-y-4 mb-20">
                 <!-- Accordion Item 1 -->
                 <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <button class="w-full px-8 py-5 flex items-center justify-between text-left font-bold text-gray-900 hover:bg-gray-50 group">
                        <div class="flex items-center gap-6">
                            <div class="w-10 h-10 rounded bg-[#340c7f]/10 text-[#340c7f] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><path d="M9 17V7l8 5-8 5"/></svg>
                            </div>
                            <span class="text-lg">Property Management</span>
                        </div>
                        <span class="text-gray-400 text-2xl group-hover:text-[#340c7f]">+</span>
                    </button>
                 </div>

                 <!-- Accordion Item 2 -->
                 <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <button class="w-full px-8 py-5 flex items-center justify-between text-left font-bold text-gray-900 hover:bg-gray-50 group">
                        <div class="flex items-center gap-6">
                            <div class="w-10 h-10 rounded bg-[#340c7f]/10 text-[#340c7f] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                            </div>
                            <span class="text-lg">Asset Management</span>
                        </div>
                        <span class="text-gray-400 text-2xl group-hover:text-[#340c7f]">+</span>
                    </button>
                 </div>

                 <!-- Accordion Item 3 -->
                 <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <button class="w-full px-8 py-5 flex items-center justify-between text-left font-bold text-gray-900 hover:bg-gray-50 group">
                        <div class="flex items-center gap-6">
                            <div class="w-10 h-10 rounded bg-[#340c7f]/10 text-[#340c7f] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>
                            </div>
                            <span class="text-lg">Financial Reporting & Compliance</span>
                        </div>
                        <span class="text-gray-400 text-2xl group-hover:text-[#340c7f]">+</span>
                    </button>
                 </div>

                 <!-- Accordion Item 4 -->
                 <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <button class="w-full px-8 py-5 flex items-center justify-between text-left font-bold text-gray-900 hover:bg-gray-50 group">
                        <div class="flex items-center gap-6">
                            <div class="w-10 h-10 rounded bg-[#340c7f]/10 text-[#340c7f] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            </div>
                            <span class="text-lg">Tenant Services & Experience</span>
                        </div>
                        <span class="text-gray-400 text-2xl group-hover:text-[#340c7f]">+</span>
                    </button>
                 </div>
            </div>

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
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Upcoming Projects</h2>
                <p class="text-xl text-gray-600">Institutional-grade developments enhancing communities and delivering value.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-16 max-w-7xl mx-auto">
                <!-- Project 1 -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-200 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=2535&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-[#340c7f] text-white text-xs font-bold px-3 py-1.5 rounded uppercase tracking-wider">Under Construction</div>
                        <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm p-3 rounded-lg flex items-center justify-between">
                            <span class="text-[#340c7f] font-bold text-sm">Urban Syndicate</span>
                            <span class="text-xs font-semibold bg-gray-100 px-2 py-1 rounded">Multifamily</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-6">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-[#340c7f]"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                             <span>Chicago, IL</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2 text-center text-xs border-t border-gray-100 pt-6">
                             <div>
                                <div class="font-bold text-gray-900 text-lg">24</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Units</div>
                             </div>
                             <div class="border-l border-gray-100">
                                <div class="font-bold text-gray-900 text-lg">$5.2M</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Value</div>
                             </div>
                             <div class="border-l border-gray-100">
                                <div class="font-bold text-gray-900 text-lg">18%</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Target IRR</div>
                             </div>
                        </div>
                        <div class="mt-6">
                            <button class="w-full py-2.5 border border-[#340c7f] text-[#340c7f] font-semibold rounded hover:bg-[#340c7f] hover:text-white transition-colors text-sm">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-200 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460317442991-0ec2aa2498a2?q=80&w=2670&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded uppercase tracking-wider">Leasing Now</div>
                        <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm p-3 rounded-lg flex items-center justify-between">
                            <span class="text-[#340c7f] font-bold text-sm">United Apartments</span>
                            <span class="text-xs font-semibold bg-gray-100 px-2 py-1 rounded">Mixed Use</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-6">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-[#340c7f]"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                             <span>Evanston, IL</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2 text-center text-xs border-t border-gray-100 pt-6">
                             <div>
                                <div class="font-bold text-gray-900 text-lg">42</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Units</div>
                             </div>
                             <div class="border-l border-gray-100">
                                <div class="font-bold text-gray-900 text-lg">$12M</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Value</div>
                             </div>
                             <div class="border-l border-gray-100">
                                <div class="font-bold text-gray-900 text-lg">16%</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Target IRR</div>
                             </div>
                        </div>
                        <div class="mt-6">
                            <button class="w-full py-2.5 border border-[#340c7f] text-[#340c7f] font-semibold rounded hover:bg-[#340c7f] hover:text-white transition-colors text-sm">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="h-64 bg-gray-200 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?q=80&w=2670&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded uppercase tracking-wider">Planning</div>
                        <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm p-3 rounded-lg flex items-center justify-between">
                            <span class="text-[#340c7f] font-bold text-sm">E 53rd Pipeline</span>
                            <span class="text-xs font-semibold bg-gray-100 px-2 py-1 rounded">Development</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-6">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-[#340c7f]"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                             <span>Hyde Park, Chicago</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2 text-center text-xs border-t border-gray-100 pt-6">
                             <div>
                                <div class="font-bold text-gray-900 text-lg">60</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Units</div>
                             </div>
                             <div class="border-l border-gray-100">
                                <div class="font-bold text-gray-900 text-lg">$18M</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Value</div>
                             </div>
                             <div class="border-l border-gray-100">
                                <div class="font-bold text-gray-900 text-lg">21%</div>
                                <div class="text-gray-500 uppercase tracking-wide text-[10px]">Target IRR</div>
                             </div>
                        </div>
                        <div class="mt-6">
                            <button class="w-full py-2.5 border border-[#340c7f] text-[#340c7f] font-semibold rounded hover:bg-[#340c7f] hover:text-white transition-colors text-sm">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/development" class="inline-block bg-[#340c7f] text-white font-semibold py-3 px-10 rounded-md hover:bg-[#240066] transition-colors shadow-lg hover:shadow-xl">
                    View All Projects
                </a>
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
                        We provide transparent communication and comprehensive resources to keep our investors informed and engaged. Our commitment to excellence extends to every aspect of our investor relations.
                    </p>
                    <div class="space-y-6 mb-10 flex-grow">
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-lg bg-[#340c7f]/10 flex items-center justify-center text-[#340c7f] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Performance Reports</h4>
                                <p class="text-sm text-gray-500 mt-1">Quarterly reports with detailed portfolio performance metrics.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-lg bg-[#340c7f]/10 flex items-center justify-center text-[#340c7f] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Investment Documents</h4>
                                <p class="text-sm text-gray-500 mt-1">Access offering memorandums and investment materials securely.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-lg bg-[#340c7f]/10 flex items-center justify-center text-[#340c7f] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
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

    <!-- News Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Insights & News</h2>
                <p class="text-xl text-gray-600">Thought leadership and market intelligence from our team.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto mb-16">
                <!-- Featured Article -->
                <div class="md:col-span-2 lg:col-span-1">
                    <div class="relative h-full min-h-[400px] rounded-xl overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1504384308090-c54be38558bd?q=80&w=2670&auto=format&fit=crop" alt="Featured News" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8 text-white">
                            <span class="bg-[#340c7f] text-xs font-bold px-3 py-1 rounded mb-4 inline-block">Company News</span>
                            <div class="flex items-center gap-4 text-sm text-white/80 mb-3">
                                <span>January 15, 2026</span>
                                <span>5 min read</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 leading-tight group-hover:underline decoration-2 underline-offset-4">Rigor Equity Makes Bold Entrance in NYC with Times Square Billboard, Expands LP Base Beyond Chicago</h3>
                            <p class="text-gray-300 line-clamp-3 mb-6">
                                Rigor Equity announces major expansion into the New York market with prominent Times Square billboard placement, marking a significant milestone in the firm's growth strategy and national brand partnership expansion.
                            </p>
                            <a href="#" class="inline-flex items-center font-semibold hover:text-[#340c7f] transition-colors">Read More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                        </div>
                    </div>
                </div>

                <!-- Side Articles -->
                <div class="space-y-8">
                    <!-- Article 1 -->
                    <div class="flex gap-6 group">
                        <div class="w-1/3 h-32 rounded-lg overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1590674899505-1c5c41951f89?q=80&w=2670&auto=format&fit=crop" alt="News" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="w-2/3">
                            <span class="text-[#340c7f] text-xs font-bold uppercase tracking-wide mb-2 block">Construction</span>
                            <h4 class="text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-[#340c7f] transition-colors">Construction Cost Management Strategies for Success</h4>
                            <p class="text-sm text-gray-500 line-clamp-2 mb-2">Best practices for managing construction costs in today's volatile market, from procurement strategies to technology.</p>
                            <span class="text-xs text-gray-400">Oct 12, 2025 • 4 min read</span>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="flex gap-6 group">
                        <div class="w-1/3 h-32 rounded-lg overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2670&auto=format&fit=crop" alt="News" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="w-2/3">
                            <span class="text-[#340c7f] text-xs font-bold uppercase tracking-wide mb-2 block">Market Strategy</span>
                            <h4 class="text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-[#340c7f] transition-colors">ESG Integration in Real Estate Investment</h4>
                            <p class="text-sm text-gray-500 line-clamp-2 mb-2">How environmental, social, and governance factors are reshaping institutional real estate investment strategies.</p>
                            <span class="text-xs text-gray-400">Sep 28, 2025 • 6 min read</span>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="flex gap-6 group">
                        <div class="w-1/3 h-32 rounded-lg overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2670&auto=format&fit=crop" alt="News" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="w-2/3">
                            <span class="text-[#340c7f] text-xs font-bold uppercase tracking-wide mb-2 block">Public Sector</span>
                            <h4 class="text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-[#340c7f] transition-colors">Public-Private Partnerships: A Framework for Success</h4>
                            <p class="text-sm text-gray-500 line-clamp-2 mb-2">Examining successful models for public-private partnerships in residential development and their impact.</p>
                            <span class="text-xs text-gray-400">Aug 15, 2025 • 5 min read</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/news" class="inline-block bg-[#340c7f] text-white font-semibold py-3 px-10 rounded-md hover:bg-[#240066] transition-colors shadow-lg hover:shadow-xl">
                    View All Insights
                </a>
            </div>
        </div>
    </section>
@endsection
