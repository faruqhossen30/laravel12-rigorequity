@extends('layouts.frontend')

@section('title', 'Contact Us - Rigorequity')

@section('content')
    <section class="container mx-auto py-12 md:py-24 px-4 max-w-[64rem]">
        <div class="flex flex-col gap-8 md:flex-row">
            <!-- Contact Info -->
            <div class="md:w-1/3 space-y-6">
                <div>
                    <h1 class="text-3xl font-bold tracking-tight text-foreground">Contact Us</h1>
                    <p class="mt-2 text-muted-foreground">
                        Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-primary mt-1"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <div>
                            <h3 class="font-medium">Phone</h3>
                            <p class="text-sm text-muted-foreground">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-primary mt-1"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <div>
                            <h3 class="font-medium">Email</h3>
                            <p class="text-sm text-muted-foreground">support@rigorequity.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-primary mt-1"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <div>
                            <h3 class="font-medium">Office</h3>
                            <p class="text-sm text-muted-foreground">
                                123 Equity Blvd, Suite 400<br>
                                San Francisco, CA 94105
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="md:w-2/3 rounded-lg border border-border bg-card text-card-foreground shadow-sm">
                <div class="p-6 space-y-6">
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="space-y-2">
                            <label for="first-name" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">First name</label>
                            <input id="first-name" class="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50" placeholder="John">
                        </div>
                        <div class="space-y-2">
                            <label for="last-name" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Last name</label>
                            <input id="last-name" class="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50" placeholder="Doe">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Email</label>
                        <input id="email" type="email" class="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50" placeholder="john@example.com">
                    </div>
                    <div class="space-y-2">
                        <label for="message" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Message</label>
                        <textarea id="message" class="flex min-h-[120px] w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm shadow-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50" placeholder="How can we help you?"></textarea>
                    </div>
                    <button class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2 w-full sm:w-auto">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
