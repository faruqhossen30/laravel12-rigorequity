<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Rigorequity - Modern Equity Management')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Shadcn Theme Variables -->
    @include('vendor.tyro-dashboard.partials.shadcn-theme')

    <!-- Theme Toggle Script -->
    <script>
        // Check for saved theme preference or system preference
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback if build not ready - minimalist fallback -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Instrument Sans', 'sans-serif'],
                        },
                        colors: {
                            background: 'var(--background)',
                            foreground: 'var(--foreground)',
                            card: 'var(--card)',
                            'card-foreground': 'var(--card-foreground)',
                            popover: 'var(--popover)',
                            'popover-foreground': 'var(--popover-foreground)',
                            primary: 'var(--primary)',
                            'primary-foreground': 'var(--primary-foreground)',
                            secondary: 'var(--secondary)',
                            'secondary-foreground': 'var(--secondary-foreground)',
                            muted: 'var(--muted)',
                            'muted-foreground': 'var(--muted-foreground)',
                            accent: 'var(--accent)',
                            'accent-foreground': 'var(--accent-foreground)',
                            destructive: 'var(--destructive)',
                            'destructive-foreground': 'var(--destructive-foreground)',
                            border: 'var(--border)',
                            input: 'var(--input)',
                            ring: 'var(--ring)',
                        },
                        borderRadius: {
                            lg: 'var(--radius)',
                            md: 'calc(var(--radius) - 2px)',
                            sm: 'calc(var(--radius) - 4px)',
                        },
                    }
                }
            }
        </script>
    @endif
    @stack('styles')
</head>
<body class="bg-background text-foreground font-sans antialiased min-h-screen flex flex-col selection:bg-primary selection:text-primary-foreground">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
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
                <div class="relative group">
                    <button class="flex items-center gap-1 transition-colors hover:text-primary focus:outline-none">
                        About
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                </div>
            </nav>

            <div class="flex items-center gap-4">
                <a href="/contact" class="inline-flex items-center justify-center rounded-full text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-[#3b0764] text-white hover:bg-[#3b0764]/90 h-10 px-6 shadow-md">
                    Contact Us
                </a>
            </div>
        </div>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="border-t border-border bg-background py-6 md:py-0">
        <div class="container mx-auto flex flex-col items-center justify-between gap-4 md:h-24 md:flex-row px-4">
            <div class="flex flex-col items-center gap-4 px-8 md:flex-row md:gap-2 md:px-0">
                <p class="text-center text-sm leading-loose text-muted-foreground md:text-left">
                    &copy; {{ date('Y') }} Rigorequity Inc. All rights reserved.
                </p>
            </div>
             <div class="flex gap-4">
                <a href="#" class="text-sm font-medium underline underline-offset-4 text-muted-foreground hover:text-foreground">Terms</a>
                <a href="#" class="text-sm font-medium underline underline-offset-4 text-muted-foreground hover:text-foreground">Privacy</a>
            </div>
        </div>
    </footer>

    <script>
        // Toggle theme button logic
        var themeToggleBtn = document.getElementById('theme-toggle');

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
    </script>
    @stack('scripts')
</body>
</html>
