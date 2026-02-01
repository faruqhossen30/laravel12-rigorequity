@extends('layouts.frontend')

@section('title', 'Development - Rigor Equity')

@section('content')
    <!-- Hero Section -->
    <div class="relative w-full h-[600px] flex items-center justify-center bg-black text-white overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1449157291145-7efd050a4d0e?q=80&w=2070&auto=format&fit=crop" alt="Development Site" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">Development</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto mb-8 font-light leading-relaxed">
                Transforming land and opportunity into thriving communities and high-performing assets through strategic development expertise.
            </p>
            <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-[#431499] text-white font-medium rounded-md hover:bg-[#35107a] transition-colors duration-200">
                Discuss a Project
            </a>
        </div>
    </div>

    <!-- Stats Bar -->
    <div class="w-full bg-[#340c7f] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">200K SF</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">Under Development</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">$60M</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">Development Pipeline</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold mb-2">20+</div>
                    <div class="text-sm md:text-base text-white/80 font-medium uppercase tracking-wide">Projects Completed</div>
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
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Strategic Development Approach</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        At Rigor Equity, we take a disciplined, data-driven approach to real estate development. We identify emerging trends early, conduct rigorous due diligence, and execute with precision to deliver exceptional returns.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Our development team combines deep local market knowledge with institutional-grade processes to de-risk projects and create lasting value for our investors and communities.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 mt-1 text-[#340c7f]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-gray-900">Sustainable Development</h4>
                                <p class="text-sm text-gray-600">ESG-focused approach with LEED and sustainability certifications.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 mt-1 text-[#340c7f]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-gray-900">Speed to Market</h4>
                                <p class="text-sm text-gray-600">Streamlined processes and strong partner relationships accelerate development timelines.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="w-full lg:w-1/2">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2089&auto=format&fit=crop" alt="Development Blueprint" class="rounded-lg shadow-xl w-full h-auto object-cover grayscale">
                </div>
            </div>
        </div>
    </section>

    <!-- Development Services Section -->
    <section class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Development Services</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M2 12h20"/><path d="m12 2 4 4"/><path d="m12 2-4 4"/><path d="m12 22 4-4"/><path d="m12 22-4-4"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Site Selection & Analysis</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Comprehensive market research and feasibility studies to identify optimal development opportunities.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Entitlements & Approvals</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Expert navigation of zoning, permitting, and regulatory processes to accelerate project timelines.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="20" y2="10"/><line x1="18" x2="18" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="16"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Financial Structuring</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Creative capital solutions including equity partnerships, debt financing, and tax incentive strategies.
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Master Planning</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Strategic land use planning and design coordination to maximize value and community impact.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Development Process -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Development Process</h2>
                <p class="text-gray-600 text-lg">
                    A proven framework for successful project delivery from concept to completion.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <!-- Step 1 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">1</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Acquisition</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Identify and secure high-potential sites through market analysis and relationships.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">2</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Entitlements</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Secure necessary approvals, zoning, and permits for optimal project design.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">3</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Design</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Collaborate with architects and engineers to finalize project specifications.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">4</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Construction</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Execute build with rigorous oversight and quality control standards.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="text-center relative">
                    <div class="w-14 h-14 bg-[#340c7f] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6 relative z-10">5</div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Lease-Up</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Marketing and leasing to achieve stabilized occupancy and optimize returns.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Section -->
    <section class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Partner on Your Next Development</h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Whether you have a site, an idea, or capital to deploy, let's explore how we can collaborate on your next development project.
                </p>
                <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-[#340c7f] text-white font-medium rounded-md hover:bg-[#2a0966] transition-colors duration-200">
                    Discuss a Project
                </a>
            </div>
        </div>
    </section>
@endsection
