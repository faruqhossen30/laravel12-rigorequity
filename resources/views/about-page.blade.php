@extends('layouts.frontend')

@section('title', 'About Us - Rigorequity')

@section('content')
    <!-- Hero Section -->
    <section class="space-y-6 pb-8 pt-6 md:pb-12 md:pt-10 lg:py-32">
        <div class="container mx-auto flex max-w-[64rem] flex-col items-center gap-4 text-center px-4">
            <h1 class="font-bold text-3xl sm:text-5xl md:text-6xl lg:text-7xl tracking-tighter text-foreground">
                We Are Rigorequity
            </h1>
            <p class="max-w-[42rem] leading-normal text-muted-foreground sm:text-xl sm:leading-8">
                Revolutionizing how real estate equity is managed, tracked, and grown. We bridge the gap between complex financial data and actionable insights.
            </p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="container mx-auto py-12 md:py-24 px-4">
        <div class="grid gap-12 lg:grid-cols-2 lg:gap-8 items-center">
            <div class="space-y-6">
                <div class="inline-block rounded-lg bg-muted px-3 py-1 text-sm text-primary">Our Mission</div>
                <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                    Democratizing Real Estate Intelligence
                </h2>
                <p class="text-lg text-muted-foreground">
                    At Rigorequity, we believe that understanding your property's true value shouldn't require a degree in finance. Our mission is to provide investors, homeowners, and property managers with the tools they need to make data-driven decisions.
                </p>
                <p class="text-lg text-muted-foreground">
                    Founded in 2023, we've helped thousands of users track over $500M in real estate assets, providing clarity in an often opaque market.
                </p>
                <div class="flex gap-4 pt-4">
                    <div class="flex flex-col gap-1">
                        <span class="text-3xl font-bold">$500M+</span>
                        <span class="text-sm text-muted-foreground">Assets Tracked</span>
                    </div>
                    <div class="h-12 w-px bg-border"></div>
                    <div class="flex flex-col gap-1">
                        <span class="text-3xl font-bold">10k+</span>
                        <span class="text-sm text-muted-foreground">Active Users</span>
                    </div>
                    <div class="h-12 w-px bg-border"></div>
                    <div class="flex flex-col gap-1">
                        <span class="text-3xl font-bold">99.9%</span>
                        <span class="text-sm text-muted-foreground">Uptime</span>
                    </div>
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border bg-muted/50 shadow-sm lg:aspect-square">
                 <!-- Abstract illustration using SVG -->
                 <svg class="absolute inset-0 h-full w-full text-muted-foreground/20" fill="none" viewBox="0 0 200 200" preserveAspectRatio="none">
                    <path d="M0 200V0h200v200H0zm50-50h100v-20H50v20zm0-40h100V90H50v20zm0-40h100V50H50v20z" fill="currentColor" />
                 </svg>
                 <div class="absolute inset-0 flex items-center justify-center">
                    <div class="rounded-full bg-background/80 p-8 backdrop-blur-sm shadow-lg border border-border">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M13 21V12"/></svg>
                    </div>
                 </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="bg-muted/30 py-12 md:py-24">
        <div class="container mx-auto px-4 space-y-12">
            <div class="text-center space-y-4 max-w-[58rem] mx-auto">
                <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-5xl">Our Core Values</h2>
                <p class="leading-normal text-muted-foreground sm:text-lg sm:leading-7">
                    These principles guide every decision we make and every line of code we write.
                </p>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Value 1 -->
                <div class="rounded-lg border bg-background p-8 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Integrity First</h3>
                    <p class="text-muted-foreground">
                        We handle sensitive financial data. Trust is our currency, and we protect it with bank-grade security and transparent practices.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="rounded-lg border bg-background p-8 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><circle cx="12" cy="12" r="10"/><line x1="2" x2="22" y1="12" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Global Perspective</h3>
                    <p class="text-muted-foreground">
                        Real estate is local, but the market is global. We build tools that work across borders, currencies, and regulatory environments.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="rounded-lg border bg-background p-8 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/></svg>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Innovation Driven</h3>
                    <p class="text-muted-foreground">
                        We don't just follow trends; we set them. Our team is constantly exploring new ways to visualize and analyze equity data.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="container mx-auto py-12 md:py-24 px-4">
        <div class="flex flex-col items-center justify-center space-y-4 text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Meet Our Leadership</h2>
            <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
                The experts building the future of equity management.
            </p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center">
            <!-- Team Member 1 -->
            <div class="flex flex-col items-center space-y-3">
                <div class="h-32 w-32 rounded-full bg-muted overflow-hidden border-2 border-border">
                     <svg class="h-full w-full text-muted-foreground" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-bold">Sarah Jenkins</h3>
                    <p class="text-sm text-primary font-medium">CEO & Founder</p>
                    <p class="text-sm text-muted-foreground mt-1">Ex-Goldman Sachs, 15 years in Real Estate.</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="flex flex-col items-center space-y-3">
                <div class="h-32 w-32 rounded-full bg-muted overflow-hidden border-2 border-border">
                     <svg class="h-full w-full text-muted-foreground" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-bold">David Chen</h3>
                    <p class="text-sm text-primary font-medium">CTO</p>
                    <p class="text-sm text-muted-foreground mt-1">Tech veteran, scaling data infrastructure.</p>
                </div>
            </div>

             <!-- Team Member 3 -->
             <div class="flex flex-col items-center space-y-3">
                <div class="h-32 w-32 rounded-full bg-muted overflow-hidden border-2 border-border">
                     <svg class="h-full w-full text-muted-foreground" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-bold">Michael Ross</h3>
                    <p class="text-sm text-primary font-medium">Head of Product</p>
                    <p class="text-sm text-muted-foreground mt-1">Focused on intuitive user experiences.</p>
                </div>
            </div>

             <!-- Team Member 4 -->
             <div class="flex flex-col items-center space-y-3">
                <div class="h-32 w-32 rounded-full bg-muted overflow-hidden border-2 border-border">
                     <svg class="h-full w-full text-muted-foreground" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-bold">Emily White</h3>
                    <p class="text-sm text-primary font-medium">VP of Marketing</p>
                    <p class="text-sm text-muted-foreground mt-1">Connecting people with financial freedom.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="border-t border-border bg-muted/50 py-12 md:py-24">
        <div class="container mx-auto flex flex-col items-center gap-4 text-center px-4">
            <h2 class="font-bold text-3xl sm:text-4xl md:text-5xl tracking-tight">
                Ready to take control?
            </h2>
            <p class="max-w-[42rem] leading-normal text-muted-foreground sm:text-xl sm:leading-8">
                Join thousands of investors who trust Rigorequity for their portfolio management.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mt-4">
                <a href="{{ route('tyro-login.register') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-11 px-8">
                    Get Started Now
                </a>
                <a href="/contact" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-11 px-8">
                    Contact Sales
                </a>
            </div>
        </div>
    </section>
@endsection
