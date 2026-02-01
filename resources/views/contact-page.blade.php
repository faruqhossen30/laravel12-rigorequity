@extends('layouts.frontend')

@section('title', 'Contact Us - Rigor Equity')

@section('content')
    <!-- Hero Section -->
    <div class="bg-[#1a0b4b] text-white py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-lg text-gray-300 max-w-2xl">
                Get in touch with our team. We're here to answer your questions and explore how we can work together.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                <!-- Left Column: Contact Info -->
                <div class="lg:w-1/3 space-y-8">
                    <!-- Contact Details -->
                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Contact Information</h2>
                        <div class="space-y-6">
                            <!-- Email -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#340c7f] flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Email</p>
                                    <a href="mailto:info@rigorequity.com" class="text-gray-600 hover:text-[#340c7f] transition-colors">info@rigorequity.com</a>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#340c7f] flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Phone</p>
                                    <a href="tel:3127779783" class="text-gray-600 hover:text-[#340c7f] transition-colors">(312) 777-9783</a>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#340c7f] flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Address</p>
                                    <p class="text-gray-600">
                                        11 E Hubbard St Suite 501<br>
                                        Chicago, IL 60611
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-gray-100 rounded-lg p-6">
                        <h3 class="font-bold text-gray-900 mb-4">Office Hours</h3>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p>Monday - Saturday: 8:00 AM - 8:00 PM</p>
                            <p>Sunday: By appointment</p>
                        </div>
                    </div>

                    <!-- Schedule CTA -->
                    <div class="bg-[#240066] rounded-lg p-6 text-white">
                        <h3 class="font-bold text-lg mb-2">Looking to Schedule?</h3>
                        <p class="text-sm text-white/80 mb-6">
                            If you'd like to schedule a meeting with our team, use our dedicated meeting scheduler.
                        </p>
                        <a href="#" class="inline-block w-full bg-white text-[#240066] font-semibold text-center py-2.5 rounded hover:bg-gray-100 transition-colors">
                            Schedule a Meeting
                        </a>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-xl shadow-sm p-6 md:p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-8">Send Us a Message</h2>

                        <form class="space-y-6">
                            <!-- Name Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="first-name" class="block text-sm font-semibold text-gray-900">First Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="first-name" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#340c7f] focus:border-transparent placeholder-gray-400" placeholder="John">
                                </div>
                                <div class="space-y-2">
                                    <label for="last-name" class="block text-sm font-semibold text-gray-900">Last Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="last-name" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#340c7f] focus:border-transparent placeholder-gray-400" placeholder="Smith">
                                </div>
                            </div>

                            <!-- Contact Info Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="email" class="block text-sm font-semibold text-gray-900">Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#340c7f] focus:border-transparent placeholder-gray-400" placeholder="john.smith@example.com">
                                </div>
                                <div class="space-y-2">
                                    <label for="phone" class="block text-sm font-semibold text-gray-900">Phone Number</label>
                                    <input type="tel" id="phone" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#340c7f] focus:border-transparent placeholder-gray-400" placeholder="(312) 777-9783">
                                </div>
                            </div>

                            <!-- Company -->
                            <div class="space-y-2">
                                <label for="company" class="block text-sm font-semibold text-gray-900">Company / Organization</label>
                                <input type="text" id="company" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#340c7f] focus:border-transparent placeholder-gray-400" placeholder="Company Name">
                            </div>

                            <!-- Inquiry Type -->
                            <div class="space-y-2">
                                <label for="inquiry-type" class="block text-sm font-semibold text-gray-900">Type of Inquiry <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <select id="inquiry-type" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#340c7f] focus:border-transparent appearance-none text-gray-900">
                                        <option value="" disabled selected>Select an inquiry type</option>
                                        <option value="investment">Investment Management</option>
                                        <option value="construction">Construction</option>
                                        <option value="development">Development</option>
                                        <option value="public-sector">Public Sector</option>
                                        <option value="general">General Inquiry</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="space-y-2">
                                <label for="message" class="block text-sm font-semibold text-gray-900">Message <span class="text-red-500">*</span></label>
                                <textarea id="message" rows="5" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#340c7f] focus:border-transparent placeholder-gray-400 resize-none" placeholder="Tell us about your inquiry..."></textarea>
                            </div>

                            <!-- Buttons -->
                            <div class="flex items-center gap-4 pt-2">
                                <button type="submit" class="bg-[#240066] text-white font-semibold py-2.5 px-8 rounded hover:bg-[#1a0b4b] transition-colors shadow-md">
                                    Send Message
                                </button>
                                <button type="button" class="bg-gray-100 text-gray-700 font-semibold py-2.5 px-6 rounded hover:bg-gray-200 transition-colors border border-gray-200">
                                    Cancel
                                </button>
                            </div>

                            <p class="text-xs text-gray-500 mt-4">
                                <span class="text-red-500">*</span> Required fields. We typically respond within 24 hours.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
