<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Rigorequity - Modern Equity Management')</title>
    <meta name="description" content="@yield('meta_description', 'Rigorequity - Modern Equity Management')">
    <meta name="keywords" content="@yield('meta_keywords', 'real estate, equity, management')">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/Rigorequity_Favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/Rigorequity_Favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Shadcn Theme Variables -->
    @include('vendor.tyro-dashboard.partials.shadcn-theme')

    <!-- Theme Toggle Script -->
    <script>
        // Check for saved theme preference, otherwise default to light
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-background text-foreground font-sans antialiased min-h-screen flex flex-col selection:bg-primary selection:text-primary-foreground">

    <!-- Navbar -->
    <header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 w-full border-b border-border/40 bg-background">
        <div class="container mx-auto flex h-16 items-center justify-between px-4 sm:px-8">
            <div class="flex items-center gap-2">
                <a href="/" class="flex items-center space-x-2">
                    <!-- RE Logo Icon -->
                   <img src="{{ asset('assets/img/rigorequity.avif') }}" alt="Rigorequity" class="h-8">
                </a>
            </div>

            <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-foreground/80">
                <a href="/investment-management" class="flex items-center gap-2 transition-colors hover:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                    Investment Management
                </a>
                <a href="/construction" class="flex items-center gap-2 transition-colors hover:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    Construction
                </a>
                <a href="/development" class="flex items-center gap-2 transition-colors hover:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M8 10h.01"/><path d="M16 10h.01"/><path d="M8 14h.01"/><path d="M16 14h.01"/></svg>
                    Development
                </a>
                <a href="/public-sector" class="flex items-center gap-2 transition-colors hover:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="10" y2="22"/><line x1="10" x2="10" y1="10" y2="22"/><line x1="14" x2="14" y1="10" y2="22"/><line x1="18" x2="18" y1="10" y2="22"/><polygon points="12 2 20 7 4 7"/></svg>
                    Public Sector
                </a>
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center gap-1 transition-colors hover:text-primary focus:outline-none">
                        About
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-200 group-hover:rotate-180"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 top-full pt-2 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 ease-out translate-y-2 group-hover:translate-y-0">
                        <div class="bg-background border border-border rounded-md shadow-lg overflow-hidden py-1">
                            <a href="/about" class="block px-4 py-2 text-sm hover:bg-muted hover:text-primary transition-colors">
                                About Us
                            </a>
                            <a href="/community-impact" class="block px-4 py-2 text-sm hover:bg-muted hover:text-primary transition-colors">
                                Community Impact
                            </a>
                            <a href="/news" class="block px-4 py-2 text-sm hover:bg-muted hover:text-primary transition-colors">
                                Insight & News
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="flex items-center gap-4">
                <a href="/contact" class="hidden md:inline-flex group relative items-center justify-center rounded-full text-sm font-bold transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-gradient-to-r from-[#3b0764] via-[#6d28d9] to-[#3b0764] bg-[length:200%_auto] hover:bg-right text-white h-11 px-8 shadow-lg hover:shadow-[#3b0764]/50 hover:-translate-y-0.5 overflow-hidden">
                    <div class="absolute inset-0 -translate-x-full animate-shine bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
                    <span class="relative z-10">Contact Us</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="relative z-10 ml-2 animate-wiggle transition-transform duration-300 group-hover:translate-x-1 group-hover:animate-none">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-foreground/80 hover:text-foreground focus:outline-none">
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-collapse class="md:hidden border-t border-border/40 bg-background">
            <nav class="flex flex-col p-4 space-y-10">
                <a href="/investment-management" class="flex items-center gap-2 text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                    Investment Management
                </a>
                <a href="/construction" class="flex items-center gap-2 text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    Construction
                </a>
                <a href="/development" class="flex items-center gap-2 text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M8 10h.01"/><path d="M16 10h.01"/><path d="M8 14h.01"/><path d="M16 14h.01"/></svg>
                    Development
                </a>
                <a href="/public-sector" class="flex items-center gap-2 text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="10" y2="22"/><line x1="10" x2="10" y1="10" y2="22"/><line x1="14" x2="14" y1="10" y2="22"/><line x1="18" x2="18" y1="10" y2="22"/><polygon points="12 2 20 7 4 7"/></svg>
                    Public Sector
                </a>

                <div x-data="{ aboutOpen: false }">
                    <button @click="aboutOpen = !aboutOpen" class="flex items-center justify-between w-full text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
                        <span class="flex items-center gap-1">
                           About
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-200" :class="{ 'rotate-180': aboutOpen }"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <div x-show="aboutOpen" x-collapse class="pl-4 mt-2 space-y-2 border-l border-border/40 ml-1">
                         <a href="/about" class="block text-sm text-muted-foreground hover:text-primary transition-colors">
                            About Us
                        </a>
                        <a href="/community-impact" class="block text-sm text-muted-foreground hover:text-primary transition-colors">
                            Community Impact
                        </a>
                        <a href="/news" class="block text-sm text-muted-foreground hover:text-primary transition-colors">
                            Insight & News
                        </a>
                    </div>
                </div>

                <a href="/contact" class="flex items-center justify-center rounded-md bg-primary text-primary-foreground h-10 px-4 text-sm font-medium shadow transition-colors hover:bg-primary/90">
                    <div class="absolute inset-0 -translate-x-full animate-shine bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
                    <span class="relative z-10">Contact Us</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="relative z-10 ml-2 animate-wiggle transition-transform duration-300 group-hover:translate-x-1 group-hover:animate-none">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="border-t border-border bg-background/50 backdrop-blur-sm pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand Section -->
                <div class="space-y-4">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('assets/img/rigorequity.avif') }}" alt="Rigorequity" class="h-8">
                    </a>
                    <p class="text-muted-foreground text-sm leading-relaxed max-w-xs">
                        {{ $footerSettings['footer_brand_description'] ?? 'Modern Equity Management solutions for the next generation of real estate investment.' }}
                    </p>
                    <div class="flex gap-4">
                        <!-- Social Icons -->
                        @if(!empty($footerSettings['footer_social_facebook']))
                        <a href="{{ $footerSettings['footer_social_facebook'] }}" class="text-muted-foreground hover:text-primary transition-colors" aria-label="Facebook">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        @endif
                        @if(!empty($footerSettings['footer_social_twitter']))
                        <a href="{{ $footerSettings['footer_social_twitter'] }}" class="text-muted-foreground hover:text-primary transition-colors" aria-label="Twitter">
                             <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                        @endif
                        @if(!empty($footerSettings['footer_social_instagram']))
                        <a href="{{ $footerSettings['footer_social_instagram'] }}" class="text-muted-foreground hover:text-primary transition-colors" aria-label="Instagram">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.409-.06 3.809-.06zm1.132 1.95c-2.33 0-2.615.01-3.61.056-.995.045-1.534.208-1.9.35-.476.186-.815.409-1.17.765-.356.356-.58.695-.765 1.171-.143.366-.305.905-.35 1.9-.046.995-.056 1.28-.056 3.61v.625c0 2.33.01 2.615.056 3.61.045.995.208 1.534.35 1.9.186.476.409.815.765 1.17.356.356.695.58 1.171.765.366.143.905.305 1.9.35.995.046 1.28.056 3.61.056h.625c2.33 0 2.615-.01 3.61-.056.995-.045 1.534-.208 1.9-.35.476-.186.815-.409 1.17-.765.356-.356.58-.695.765-1.171.143-.366.305-.905.35-1.9.046-.995.056-1.28.056-3.61v-.625c0-2.33-.01-2.615-.056-3.61-.045-.995-.208-1.534-.35-1.9-.186-.476-.409-.815-.765-1.17-.356-.356-.695-.58-1.171-.765-.366-.143-.905-.305-1.9-.35-.995-.046-1.28-.056-3.61-.056h-.625zm-3.155 4.637a5.32 5.32 0 115.32 5.32 5.32 5.32 0 01-5.32-5.32zm1.95 0a3.37 3.37 0 103.37-3.37 3.37 3.37 0 00-3.37 3.37zm5.954-4.225a1.29 1.29 0 11-1.29 1.29 1.29 1.29 0 011.29-1.29z" clip-rule="evenodd" /></svg>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-foreground mb-4">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{route('about')}}" class="text-sm text-muted-foreground hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="{{route('contact')}}" class="text-sm text-muted-foreground hover:text-primary transition-colors">Contact Us</a></li>
                        <li><a href="{{route('construction')}}" class="text-sm text-muted-foreground hover:text-primary transition-colors">Construction</a></li>
                        <li><a href="{{route('development')}}" class="text-sm text-muted-foreground hover:text-primary transition-colors">Development</a></li>
                        <li><a href="{{route('invest-namagement')}}" class="text-sm text-muted-foreground hover:text-primary transition-colors">Invest Management</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-semibold text-foreground mb-4">Contact</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-muted-foreground">
                            <svg class="h-5 w-5 shrink-0 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <span>{!! $footerSettings['footer_address'] ?? '1234 Investment Blvd, Suite 100<br>New York, NY 10001' !!}</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-muted-foreground">
                            <svg class="h-5 w-5 shrink-0 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            <a href="mailto:{{ $footerSettings['footer_email'] ?? 'info@rigorequity.com' }}" class="hover:text-primary transition-colors">{{ $footerSettings['footer_email'] ?? 'info@rigorequity.com' }}</a>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-muted-foreground">
                            <svg class="h-5 w-5 shrink-0 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            <a href="tel:{{ $footerSettings['footer_phone'] ?? '+1234567890' }}" class="hover:text-primary transition-colors">{{ $footerSettings['footer_phone'] ?? '+1 (234) 567-890' }}</a>
                        </li>
                    </ul>
                </div>

                <!-- Map -->
                <div class="space-y-4">
                     <h3 class="font-semibold text-foreground mb-4">Our Location</h3>
                     <div class="h-40 w-full rounded-lg overflow-hidden border border-border bg-muted relative group">
                        <iframe src="{{ $footerSettings['footer_map_iframe'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1622207901399!5m2!1sen!2sus' }}"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="grayscale hover:grayscale-0 transition-all duration-500"></iframe>
                     </div>
                </div>
            </div>

            <div class="border-t border-border pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-muted-foreground text-center md:text-left">
                    @if(isset($footerSettings['footer_copyright_text']))
                        {!! str_replace('{year}', date('Y'), $footerSettings['footer_copyright_text']) !!}
                    @else
                        &copy; {{ date('Y') }} Rigorequity Inc. All rights reserved.
                    @endif
                </p>
                <div class="flex gap-6">
                    <a href="{{ route('privacy-policy') }}" class="text-sm text-muted-foreground hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="{{ route('terms-and-conditions') }}" class="text-sm text-muted-foreground hover:text-primary transition-colors">Terms and Conditions</a>
                    <a href="{{ route('cookie-policy') }}" class="text-sm text-muted-foreground hover:text-primary transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Toggle theme button logic
        var themeToggleBtn = document.getElementById('theme-toggle');

        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', function() {
                // if set via local storage previously
                if (localStorage.theme === 'dark') {
                    document.documentElement.classList.remove('dark');
                    localStorage.theme = 'light';
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.theme = 'dark';
                }
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
