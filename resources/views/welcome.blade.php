@extends('layouts.frontend')

@section('title', 'Rigor Equity - Real Estate Investment Firm')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-background pt-16 md:pt-20 lg:pt-32 pb-16">
        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="flex flex-col items-center text-center max-w-4xl mx-auto space-y-8">
                <div class="inline-flex items-center rounded-full border border-primary/20 bg-primary/5 px-3 py-1 text-sm font-medium text-primary backdrop-blur-sm">
                    <span class="flex h-2 w-2 rounded-full bg-primary mr-2"></span>
                    Now accepting accredited investors
                </div>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold tracking-tight text-foreground leading-tight">
                    Transforming Value-Add <br class="hidden md:inline" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary/60">Multifamily Investments</span>
                </h1>

                <p class="text-lg md:text-xl text-muted-foreground max-w-2xl leading-relaxed">
                    Rigor Equity is a Chicago-based real estate investment firm specializing in acquiring and repositioning value-add multifamily properties in underserved communities.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto pt-4">
                    @if (Route::has('tyro-login.register'))
                    <a href="{{ route('tyro-login.register') }}" class="inline-flex items-center justify-center h-12 rounded-md bg-primary px-8 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50">
                        Start Investing
                    </a>
                    @else
                    <a href="#" class="inline-flex items-center justify-center h-12 rounded-md bg-primary px-8 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50">
                        Start Investing
                    </a>
                    @endif
                    <a href="#approach" class="inline-flex items-center justify-center h-12 rounded-md border border-input bg-background px-8 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50">
                        Our Approach
                    </a>
                </div>
            </div>
        </div>

        <!-- Background decorative elements -->
        <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] rounded-full bg-primary/5 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-[800px] h-[800px] rounded-full bg-primary/5 blur-3xl pointer-events-none"></div>
    </section>

    <!-- Stats Section -->
    <section class="border-y border-border bg-muted/30">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="space-y-2">
                    <h3 class="text-3xl md:text-4xl font-bold text-foreground">$32M+</h3>
                    <p class="text-sm font-medium text-muted-foreground uppercase tracking-wider">Capital Raised</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-3xl md:text-4xl font-bold text-foreground">Chicago</h3>
                    <p class="text-sm font-medium text-muted-foreground uppercase tracking-wider">Primary Market</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-3xl md:text-4xl font-bold text-foreground">100+</h3>
                    <p class="text-sm font-medium text-muted-foreground uppercase tracking-wider">Units Managed</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-3xl md:text-4xl font-bold text-foreground">15%</h3>
                    <p class="text-sm font-medium text-muted-foreground uppercase tracking-wider">Target IRR</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured In -->
    <section class="py-10 border-b border-border/50">
        <div class="container mx-auto px-4">
            <p class="text-center text-sm font-semibold text-muted-foreground mb-6 uppercase tracking-wider">As Featured In</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Text placeholders for logos as per standard corporate styling -->
                <span class="text-xl font-bold font-serif">Yahoo! Finance</span>
                <span class="text-xl font-bold tracking-tight">PropTech Buzz</span>
                <span class="text-xl font-bold italic">Benzinga</span>
                <span class="text-xl font-bold font-mono">citybiz</span>
            </div>
        </div>
    </section>

    <!-- Investment Approach -->
    <section id="approach" class="py-20 md:py-32 bg-background">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-foreground">Our Investment Approach</h2>
                <p class="text-lg text-muted-foreground">
                    Rigor Equity’s investment approach is rooted in delivering both financial success and community revitalization.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-all hover:shadow-lg hover:border-primary/50">
                    <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="m15.5 5.5-3-3-4.5 9-6-11v18h16v-5"/><path d="M15.5 5.5l5 4.5-5 4.5"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-foreground">Targeted Acquisitions</h3>
                    <p class="text-muted-foreground">Sourcing undervalued multifamily properties in emerging markets.</p>
                </div>

                <!-- Card 2 -->
                <div class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-all hover:shadow-lg hover:border-primary/50">
                    <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M13 21V12"/><path d="M21 12h-2"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-foreground">Value-Add Renovations</h3>
                    <p class="text-muted-foreground">Enhancing properties with capital improvements to increase affordability and quality.</p>
                </div>

                <!-- Card 3 -->
                <div class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-all hover:shadow-lg hover:border-primary/50">
                    <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="20" y2="10"/><line x1="18" x2="18" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="16"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-foreground">Operational Efficiency</h3>
                    <p class="text-muted-foreground">Leveraging expertise in property management to optimize cash flow and returns.</p>
                </div>

                <!-- Card 4 -->
                <div class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-all hover:shadow-lg hover:border-primary/50">
                    <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-foreground">Investor-Centric Growth</h3>
                    <p class="text-muted-foreground">Creating a seamless investment experience with fully managed real estate opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission/Quote Section -->
    <section class="py-20 bg-muted/30">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-foreground">Bridging the Gap</h2>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        "Our platform is built to streamline the investment process for accredited investors. By handling everything from acquisitions to renovations and asset management, we’re providing a turnkey solution that delivers strong returns while driving meaningful change in overlooked communities."
                    </p>
                    <div class="flex items-center gap-4 pt-4">
                        <div class="h-12 w-12 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-xl">
                            KS
                        </div>
                        <div>
                            <p class="font-bold text-foreground">Kareem Shahbandar</p>
                            <p class="text-sm text-muted-foreground">Co-Founder, Rigor Equity</p>
                        </div>
                    </div>
                </div>
                <div class="relative h-[400px] rounded-2xl overflow-hidden bg-background border border-border p-2 shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-primary/10 z-0"></div>
                    <div class="relative z-10 h-full w-full rounded-xl border border-border/50 bg-background/50 backdrop-blur-sm flex items-center justify-center">
                        <div class="text-center p-8 max-w-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="mx-auto mb-6 text-primary/50"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M13 21V12"/></svg>
                            <p class="text-2xl font-bold text-foreground mb-4">Hands-Free Investment</p>
                            <p class="text-muted-foreground">Rigor Equity funds investor deals while managing all construction and project execution, creating a passive investment model.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-primary text-primary-foreground">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Invest with Rigor Equity?</h2>
            <p class="text-primary-foreground/80 max-w-2xl mx-auto mb-10 text-lg">
                We are committed to transforming distressed assets into high-performing investments that benefit both investors and the communities they serve.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @if (Route::has('tyro-login.register'))
                <a href="{{ route('tyro-login.register') }}" class="inline-flex items-center justify-center h-12 rounded-md bg-background text-foreground px-8 text-sm font-medium shadow hover:bg-background/90 transition-colors">
                    Start Investing
                </a>
                @else
                <a href="#" class="inline-flex items-center justify-center h-12 rounded-md bg-background text-foreground px-8 text-sm font-medium shadow hover:bg-background/90 transition-colors">
                    Start Investing
                </a>
                @endif
                <a href="/contact" class="inline-flex items-center justify-center h-12 rounded-md border border-primary-foreground/20 bg-primary-foreground/10 px-8 text-sm font-medium text-primary-foreground shadow-sm transition-colors hover:bg-primary-foreground/20">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
