@extends('layouts.frontend')

@section('title', 'About Us - Rigor Equity')

@section('content')
<div class="bg-[#f8f9fa] min-h-screen">
    <!-- Hero Section -->
    <div class="container mx-auto px-4 py-16 md:py-24">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                <h1 class="text-4xl md:text-6xl font-bold text-[#340c7f] mb-6 tracking-tight">
                    About Rigor <br> Equity
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                    A vertically integrated operator-led real estate investment and development firm
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
                    <img src="https://images.unsplash.com/photo-1555109307-f7d9da25c244?q=80&w=2073&auto=format&fit=crop" alt="Times Square Feature" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                        <p class="text-white text-sm font-medium">Featured in Times Square, New York</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container mx-auto px-4 pb-20">
        <div class="max-w-4xl mx-auto space-y-12">
            <!-- Intro Paragraph -->
            <p class="text-lg text-gray-700 leading-relaxed">
                Rigor Equity is a vertically integrated operator-led real estate investment and development firm that focuses on acquiring, repositioning, and building undervalued multifamily and MDU assets in overlooked and underserved submarkets. The firm specializes in urban infill development and value-add strategies through hands-on asset management, efficient construction oversight, and full alignment of investor and operator interests.
            </p>

            <!-- Our Approach -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-[#340c7f] mb-4">Our Approach</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Founded by a new generation of operators, Rigor Equity uses a data-informed acquisition approach that targets transitional neighborhoods with strong demographic trends, infrastructure investment, and meaningful upside potential. As actual developers, the company manages projects from concept to completion, ensuring disciplined underwriting, community-focused design, and capital-efficient execution that produces above-market, risk-adjusted returns while supporting long-term neighborhood revitalization.
                </p>
            </div>

            <!-- Competitive Advantage -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-[#340c7f] mb-4">Competitive Advantage</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Rigor Equity leverages private capital partnerships, public sector collaboration, local municipal partnerships, vertically controlled renovation pipelines, and off-market deal flow to compress timelines and deliver institutional-quality assets at below-market bases.
                </p>
            </div>
        </div>
    </div>

    <!-- Key Differentiators Section -->
    <div class="container mx-auto px-4 pb-24">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-[#340c7f] mb-8">Key Differentiators</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">Operator-Led</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Founded and managed by actual developers who oversee every aspect of the investment lifecycle from acquisition to disposition.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">Vertically Integrated</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Full control over construction, development, and asset management ensures quality, efficiency, and cost control.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">Data-Informed Strategy</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Rigorous market analysis and demographic research identify high-potential submarkets before institutional capital arrives.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-[#340c7f] mb-3">Community-Focused</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Investments designed to revitalize neighborhoods while delivering superior risk-adjusted returns to investors.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
