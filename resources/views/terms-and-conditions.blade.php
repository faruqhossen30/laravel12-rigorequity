@extends('layouts.frontend')

@section('title', 'Terms and Conditions - Rigor Equity')

@section('content')
<div class="bg-[#f8f9fa] min-h-screen">
    <div class="container mx-auto px-4 py-16 md:py-24">
        <h1 class="text-4xl md:text-5xl font-bold text-[#340c7f] mb-6 tracking-tight text-center">Terms and Conditions</h1>
        <p class="text-center text-gray-500 mb-12">Effective Date: February 2026</p>

        <div class="max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-xl shadow-sm border border-gray-100">
            <div class="space-y-10 text-gray-700 leading-relaxed">

                <!-- Intro -->
                <section>
                    <p class="mb-4">Welcome to the Rigor Equity website. These Terms and Conditions ("Terms") govern your access to and use of the Rigor Equity website, services, and content. By accessing or using this website, you agree to be bound by these Terms. If you disagree, please do not use our website.</p>
                </section>

                <!-- About Rigor Equity -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">About Rigor Equity</h2>
                    <p class="mb-4">Rigor Equity is a construction and development firm based in Chicago, Illinois. Our website provides information about our construction services, residential development expertise, and related offerings.</p>
                </section>

                <!-- Use of the Website -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Use of the Website</h2>
                    <p class="mb-4">You agree to use this website only for lawful purposes. You must not:</p>
                    <ul class="list-disc pl-6 space-y-2 mb-4">
                        <li>Use the site in any way that violates applicable laws or regulations</li>
                        <li>Attempt to gain unauthorized access to the website or its systems</li>
                        <li>Interfere with the security, performance, or functionality of the website</li>
                        <li>Use the website to transmit harmful or malicious content</li>
                    </ul>
                    <p class="mb-4">Rigor Equity reserves the right to restrict or terminate access if these Terms are violated.</p>
                </section>

                <!-- Intellectual Property -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Intellectual Property</h2>
                    <p class="mb-4">All content on this website, including text, graphics, logos, images, designs, and layout, is the property of Rigor Equity or its licensors and is protected by applicable intellectual property laws.</p>
                    <p class="mb-4">You may view and download content for personal, non-commercial use only. You may not copy, reproduce, modify, distribute, or use any content without prior written permission from Rigor Equity.</p>
                </section>

                <!-- Service Information Disclaimer -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Service Information Disclaimer</h2>
                    <p class="mb-4">All information provided on this website is for general informational purposes only. While we strive to keep content accurate and up to date, Rigor Equity does not guarantee the completeness, accuracy, or reliability of any information.</p>
                    <p class="mb-4">Website content does not constitute professional, legal, or construction advice. Project details, pricing, timelines, and availability may vary and are subject to change.</p>
                </section>

                <!-- Third-Party Links -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Third-Party Links</h2>
                    <p class="mb-4">This website may contain links to third-party websites for convenience or reference. Rigor Equity does not control or endorse these websites and is not responsible for their content, policies, or practices.</p>
                    <p class="mb-4">Accessing third-party sites is done at your own risk.</p>
                </section>

                <!-- Limitation of Liability -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Limitation of Liability</h2>
                    <p class="mb-4">To the fullest extent permitted by law, Rigor Equity shall not be liable for any direct, indirect, incidental, consequential, or special damages arising from your use of or inability to use this website.</p>
                    <p class="mb-4">This includes, but is not limited to, damages related to loss of data, business interruption, or reliance on website content.</p>
                </section>

                <!-- Indemnification -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Indemnification</h2>
                    <p class="mb-4">You agree to indemnify and hold harmless Rigor Equity, its officers, employees, partners, and affiliates from any claims, damages, losses, or expenses arising from your misuse of the website or violation of these Terms.</p>
                </section>

                <!-- Privacy -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Privacy</h2>
                    <p class="mb-4">Your use of this website is also governed by our Privacy Policy, which explains how we collect, use, and protect your personal information.</p>
                </section>

                <!-- Changes to These Terms -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Changes to These Terms</h2>
                    <p class="mb-4">Rigor Equity may update or modify these Terms at any time without prior notice. Changes will be effective immediately upon posting on this page. Continued use of the website constitutes acceptance of the revised Terms.</p>
                </section>

                <!-- Governing Law -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Governing Law</h2>
                    <p class="mb-4">These Terms shall be governed by and construed in accordance with the laws of the State of Illinois, without regard to conflict of law principles.</p>
                </section>

                <!-- Contact Information -->
                <section>
                    <h2 class="text-2xl font-bold text-[#340c7f] mb-4">Contact Information</h2>
                    <p class="mb-4">If you have any questions about these Terms and Conditions, please contact us:</p>
                    <div class="mt-4 p-6 bg-gray-50 rounded-lg border border-gray-100">
                        <p class="font-bold text-lg mb-2">Rigor Equity</p>
                        <p class="mb-1">11 E Hubbard St, Suite 501</p>
                        <p class="mb-4">Chicago, IL 60611</p>

                        <p class="mb-1"><span class="font-semibold">Email:</span> <a href="mailto:info@rigorequity.com" class="text-[#340c7f] hover:underline">info@rigorequity.com</a></p>
                        <p class="mb-0"><span class="font-semibold">Phone:</span> <a href="tel:3127779783" class="text-[#340c7f] hover:underline">(312) 777-9783</a></p>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
