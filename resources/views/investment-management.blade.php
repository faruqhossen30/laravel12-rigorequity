@extends('layouts.frontend')

@section('title', 'Investment Management - Rigor Equity')

@section('content')
    <!-- Hero Section -->
    <div class="relative w-full h-[600px] flex items-center justify-center bg-black text-white overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?q=80&w=2613&auto=format&fit=crop" alt="City Skyline" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white tracking-tight">Investment Management</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto mb-8 font-light">
                Expert real estate investment strategies that deliver consistent, long-term value for our partners and stakeholders.
            </p>
            <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-[#431499] text-white font-medium rounded-md hover:bg-[#35107a] transition-colors duration-200">
                Schedule a Consultation
            </a>
        </div>
    </div>

    <!-- Stats Bar -->
    <div class="w-full bg-blue-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-white/20">
                <div class="p-4">
                    <div class="text-3xl md:text-4xl font-bold mb-1">$45M+</div>
                    <div class="text-sm md:text-base text-white/80 font-medium">Projects Under Management</div>
                </div>
                <div class="p-4">
                    <div class="text-3xl md:text-4xl font-bold mb-1">19%</div>
                    <div class="text-sm md:text-base text-white/80 font-medium">Avg. Annual Return</div>
                </div>
                <div class="p-4">
                    <div class="text-3xl md:text-4xl font-bold mb-1">90%</div>
                    <div class="text-sm md:text-base text-white/80 font-medium">LP Retention Rate</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Investment Philosophy Section -->
    <section class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Investment Philosophy</h2>
                <p class="text-gray-600 text-lg">
                    Our disciplined approach combines institutional rigor with entrepreneurial agility to deliver superior risk-adjusted returns.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Data-Driven Decisions</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Advanced analytics and market intelligence guide every investment decision, ensuring opportunities are backed by rigorous research.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Operator-Led Expertise</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Real estate operators with hands-on experience managing complex assets across all market cycles.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="20" y2="10"/><line x1="18" x2="18" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="16"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Risk-Adjusted Returns</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Focus on sustainable returns that balance growth potential with prudent risk management and capital preservation.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2"/><line x1="12" x2="12" y1="2" y2="22"/><path d="M4 12h16"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Long-Term Value Creation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Patient capital approach prioritizing asset quality, operational excellence, and strategic positioning for enduring value.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Execute Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">How We Execute</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Execute Card 1 -->
                <div class="p-6">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-full flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Deal Sourcing & Acquisition</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Proprietary deal flow and off-market opportunities through our extensive network of brokers, developers, institutional partners, and municipal partnerships.
                    </p>
                </div>

                <!-- Execute Card 2 -->
                <div class="p-6">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Rigorous Underwriting</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Comprehensive financial modeling, market analysis, and due diligence to validate every investment thesis before deployment.
                    </p>
                </div>

                <!-- Execute Card 3 -->
                <div class="p-6">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-lg flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.09a2 2 0 0 1-1-1.74v-.51a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Active Asset Management</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Hands-on operational oversight with dedicated property management teams driving NOI growth and value creation.
                    </p>
                </div>

                <!-- Execute Card 4 -->
                <div class="p-6">
                    <div class="w-12 h-12 bg-[#340c7f] rounded-full flex items-center justify-center text-white mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Transparent Reporting</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Regular performance updates, detailed financial statements, and direct access to portfolio managers for all investors.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Strategies Section -->
    <section class="py-20 bg-[#f3f4f6]">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Investment Strategies</h2>
                <p class="text-gray-600 text-lg">
                    Diversified approaches designed to meet varying risk profiles and investment objectives.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Strategy Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 h-full flex flex-col">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Quick Turnaround Equity</h3>
                    <p class="text-gray-600 text-sm mb-8 leading-relaxed">
                        Short-term equity investments in opportunistic and value-add multifamily dwelling units (MDU) with rapid deployment and exit strategies.
                    </p>

                    <ul class="space-y-3 mt-auto">
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Opportunistic & value-add MDU
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Short-term hold periods
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Quick turnaround strategy
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Higher velocity returns
                        </li>
                    </ul>
                </div>

                <!-- Strategy Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 h-full flex flex-col">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Residential Value-Add & Development</h3>
                    <p class="text-gray-600 text-sm mb-8 leading-relaxed">
                        Equity investments in multifamily value-add opportunities and ground-up residential development projects.
                    </p>

                    <ul class="space-y-3 mt-auto">
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Multifamily value-add assets
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Residential development equity
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Operational improvements
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Medium-term appreciation
                        </li>
                    </ul>
                </div>

                <!-- Strategy Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 h-full flex flex-col">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Public Sector Construction</h3>
                    <p class="text-gray-600 text-sm mb-8 leading-relaxed">
                        Low-risk investment opportunities in federal, city, and municipal construction projects with stable returns.
                    </p>

                    <ul class="space-y-3 mt-auto">
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Federal construction projects
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> City & municipal partnerships
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Low-risk profile
                        </li>
                        <li class="flex items-start text-sm text-gray-600">
                            <span class="mr-2 text-[#340c7f]">•</span> Government-backed stability
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Section -->
    <section class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Ready to Invest with Confidence?</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-10">
                Partner with Rigor Equity to access institutional-quality investment opportunities and expert portfolio management.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contact" class="inline-flex items-center justify-center h-12 rounded-md bg-[#340c7f] px-8 text-sm font-medium text-white shadow hover:bg-[#2a0a66] transition-colors">
                    Contact Our Team
                </a>
                <a href="#" class="inline-flex items-center justify-center h-12 rounded-md border border-gray-300 bg-white px-8 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 transition-colors">
                    Download Investment Overview
                </a>
            </div>
        </div>
    </section>
@endsection
