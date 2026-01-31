@extends('layouts.frontend')

@section('title', 'Community Impact - Rigorequity')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-12 md:py-24 lg:py-32 bg-muted/30">
        <div class="container mx-auto px-4 flex flex-col items-center text-center space-y-8">
            <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">
                Social Responsibility
            </div>
            <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl md:text-6xl lg:text-7xl">
                Investing in <span class="text-primary">People</span> and <span class="text-primary">Places</span>
            </h1>
            <p class="max-w-[42rem] leading-normal text-muted-foreground sm:text-xl sm:leading-8">
                We believe real estate is more than just assets; it's about the communities we build. Our commitment goes beyond returns to creating lasting positive change.
            </p>
        </div>
    </section>

    <!-- Impact Metrics -->
    <section class="container mx-auto py-12 px-4 -mt-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 rounded-xl border bg-card p-8 shadow-lg text-card-foreground">
            <div class="flex flex-col items-center justify-center p-4 text-center space-y-2 border-b sm:border-b-0 sm:border-r border-border last:border-0">
                <span class="text-4xl font-bold tracking-tight">1,200+</span>
                <span class="text-sm font-medium text-muted-foreground">Affordable Homes Created</span>
            </div>
            <div class="flex flex-col items-center justify-center p-4 text-center space-y-2 border-b sm:border-b-0 sm:border-r border-border last:border-0">
                <span class="text-4xl font-bold tracking-tight">500+</span>
                <span class="text-sm font-medium text-muted-foreground">Local Jobs Supported</span>
            </div>
            <div class="flex flex-col items-center justify-center p-4 text-center space-y-2 last:border-0">
                <span class="text-4xl font-bold tracking-tight">$25M</span>
                <span class="text-sm font-medium text-muted-foreground">Community Reinvestment</span>
            </div>
        </div>
    </section>

    <!-- Our Pillars -->
    <section class="container mx-auto py-12 md:py-24 px-4 space-y-12">
        <div class="text-center space-y-4 max-w-[58rem] mx-auto">
            <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-5xl">Pillars of Impact</h2>
            <p class="leading-normal text-muted-foreground sm:text-lg sm:leading-7">
                Our strategy focuses on three key areas where we can drive the most significant change.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            <!-- Pillar 1 -->
            <div class="flex flex-col space-y-4 rounded-lg border bg-background p-6 shadow-sm transition-all hover:shadow-md">
                <div class="rounded-full bg-primary/10 w-12 h-12 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
                <h3 class="text-xl font-bold">Housing Accessibility</h3>
                <p class="text-muted-foreground flex-1">
                    We prioritize developments that include affordable housing units, ensuring that essential workers and families can live in the communities they serve.
                </p>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> Mixed-income developments</li>
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> Rent stabilization programs</li>
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> First-time buyer assistance</li>
                </ul>
            </div>

            <!-- Pillar 2 -->
            <div class="flex flex-col space-y-4 rounded-lg border bg-background p-6 shadow-sm transition-all hover:shadow-md">
                <div class="rounded-full bg-primary/10 w-12 h-12 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/></svg>
                </div>
                <h3 class="text-xl font-bold">Sustainability</h3>
                <p class="text-muted-foreground flex-1">
                    Reducing our carbon footprint through green building practices, energy-efficient retrofits, and smart building technologies.
                </p>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> LEED certified construction</li>
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> Solar energy integration</li>
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> Water conservation systems</li>
                </ul>
            </div>

            <!-- Pillar 3 -->
            <div class="flex flex-col space-y-4 rounded-lg border bg-background p-6 shadow-sm transition-all hover:shadow-md">
                <div class="rounded-full bg-primary/10 w-12 h-12 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 class="text-xl font-bold">Community Growth</h3>
                <p class="text-muted-foreground flex-1">
                    Partnering with local businesses and non-profits to foster economic growth and provide opportunities for residents.
                </p>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> Local hiring mandates</li>
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> Small business grants</li>
                    <li class="flex items-center"><span class="mr-2 text-primary">•</span> Youth mentorship programs</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Highlight Section -->
    <section class="bg-muted/50 py-12 md:py-24">
        <div class="container mx-auto px-4">
            <div class="grid gap-12 lg:grid-cols-2 items-center">
                <div class="relative overflow-hidden rounded-xl border bg-background shadow-lg">
                    <!-- Abstract representation of a community center or building -->
                     <svg class="w-full h-auto aspect-video text-muted-foreground/10 bg-muted" viewBox="0 0 400 300" fill="currentColor">
                        <rect width="400" height="300" fill="currentColor"/>
                        <path d="M50 250 L50 100 L200 20 L350 100 L350 250 Z" fill="none" stroke="currentColor" stroke-width="2" stroke-opacity="0.2"/>
                        <rect x="100" y="150" width="50" height="50" fill="none" stroke="currentColor" stroke-width="2" stroke-opacity="0.2"/>
                        <rect x="250" y="150" width="50" height="50" fill="none" stroke="currentColor" stroke-width="2" stroke-opacity="0.2"/>
                        <rect x="175" y="180" width="50" height="70" fill="none" stroke="currentColor" stroke-width="2" stroke-opacity="0.2"/>
                     </svg>
                     <div class="absolute inset-0 flex items-center justify-center">
                        <span class="bg-background/80 backdrop-blur px-4 py-2 rounded-lg border shadow font-mono text-xs">Project Spotlight: The Horizon Center</span>
                     </div>
                </div>
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl">The Horizon Initiative</h2>
                    <p class="text-lg text-muted-foreground">
                        Last year, we launched the Horizon Initiative in downtown Chicago. By transforming an underutilized industrial lot into a mixed-use community hub, we provided 150 new affordable housing units and 20,000 sq ft of retail space dedicated to local minority-owned businesses.
                    </p>
                    <blockquote class="border-l-4 border-primary pl-4 italic text-muted-foreground">
                        "Rigorequity didn't just build apartments; they built a foundation for our neighborhood's future."
                    </blockquote>
                    <div>
                        <a href="/contact" class="text-primary font-medium hover:underline inline-flex items-center">
                            Learn more about our projects <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="container mx-auto py-12 md:py-24 px-4 text-center">
        <h2 class="font-bold text-3xl sm:text-4xl mb-4">Make an Impact With Us</h2>
        <p class="max-w-[42rem] mx-auto text-muted-foreground mb-8 text-lg">
            Whether you're an investor looking for ethical returns or a community leader seeking partnership, we want to hear from you.
        </p>
        <a href="/contact" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-11 px-8">
            Get In Touch
        </a>
    </section>
@endsection
