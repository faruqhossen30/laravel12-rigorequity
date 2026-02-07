@php
    $faqs = \App\Models\Faq::all();
@endphp
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Operations & Asset Management</h2>
            <p class="text-xl text-gray-600">Institutional quality operations across every aspect of the asset lifecycle.</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-4">
            @foreach ($faqs as $faq)
                <div x-data="{ open: false }" class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <button @click="open = !open" class="w-full px-8 py-5 flex items-center justify-between text-left font-bold text-gray-900 hover:bg-gray-50 group">
                        <div class="flex items-center gap-6">
                            <div class="w-10 h-10 rounded bg-[#340c7f]/10 text-[#340c7f] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                            </div>
                            <span class="text-lg">{{ $faq->question }}</span>
                        </div>
                        <span class="text-gray-400 text-2xl group-hover:text-[#340c7f]" x-text="open ? '-' : '+'">+</span>
                    </button>
                    <div x-show="open" x-transition class="px-8 pb-5 pl-24 text-gray-600">
                        {!! $faq->answer !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
