@extends('layouts.frontend')

@section('title', 'All Projects - Rigorequity')

@section('content')
<div class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-8">
        <!-- Header -->
        <div class="mb-16">
            <h1 class="text-4xl font-bold tracking-tight text-foreground sm:text-5xl mb-4">All Projects</h1>
            <p class="text-lg text-muted-foreground max-w-2xl">
                Explore our complete portfolio of upcoming and completed projects across all service areas.
            </p>
        </div>

        <!-- Upcoming Projects -->
        <div class="mb-20" x-data="{
            scrollLeft() {
                this.$refs.scrollContainer.scrollBy({ left: -400, behavior: 'smooth' });
            },
            scrollRight() {
                this.$refs.scrollContainer.scrollBy({ left: 400, behavior: 'smooth' });
            }
        }">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-semibold text-foreground">Upcoming Projects</h2>
                <div class="flex gap-2">
                    <button @click="scrollLeft" class="p-2 rounded-full border border-border hover:bg-accent transition-colors" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="m15 18-6-6 6-6"/></svg>
                    </button>
                    <button @click="scrollRight" class="p-2 rounded-full border border-border hover:bg-accent transition-colors" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="m9 18 6-6-6-6"/></svg>
                    </button>
                </div>
            </div>

            <div x-ref="scrollContainer" class="flex gap-6 overflow-x-auto pb-6 snap-x snap-mandatory scrollbar-hide -mx-4 px-4 sm:mx-0 sm:px-0">
                @forelse($upcomingProjects as $project)
                <div class="min-w-[300px] md:min-w-[380px] snap-center bg-card rounded-xl overflow-hidden shadow-sm border border-border/50 group">
                    <div class="relative aspect-[4/5] bg-indigo-900 overflow-hidden">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-indigo-950/90"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-30">
                            @if($project->image)
                                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale mix-blend-multiply">
                            @else
                                <div class="w-full h-full bg-gray-800"></div>
                            @endif
                        </div>

                        <!-- Badges -->
                        <div class="absolute top-6 left-6 flex flex-col gap-2">
                            <span class="inline-flex items-center rounded-full bg-white/90 px-3 py-1 text-xs font-medium text-indigo-900 shadow-sm">
                                <span class="mr-1 font-bold">RE</span> {{ Str::upper($project->title) }}
                            </span>
                        </div>

                        <!-- Center Logo -->
                        <div class="absolute inset-0 flex items-end justify-center pb-20">
                            <div class="text-white text-3xl font-bold flex items-center gap-2">
                                <span class="text-indigo-400">Rigor</span>Equity
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">{{ $project->title }}</h3>
                        <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900/50 dark:text-indigo-300 mb-6">
                            {{ $project->type }}
                        </span>

                        <div class="grid grid-cols-3 gap-4 mb-6 text-sm">
                            <div>
                                <p class="text-muted-foreground text-xs mb-1">Units</p>
                                <p class="font-medium">{{ $project->units ?? 'N/A' }}</p>
                            </div>
                            <div>
                                <p class="text-muted-foreground text-xs mb-1">SF</p>
                                <p class="font-medium">{{ $project->sf ?? 'N/A' }}</p>
                            </div>
                            <div>
                                <p class="text-muted-foreground text-xs mb-1">Loc</p>
                                <p class="font-medium">{{ $project->location ?? 'N/A' }}</p>
                            </div>
                        </div>

                        @if(!empty($project->partners))
                        <div class="border-t border-border pt-4">
                            <p class="text-xs text-muted-foreground mb-2 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                Partners
                            </p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project->partners as $partner)
                                <span class="inline-flex items-center px-2 py-1 rounded bg-secondary text-secondary-foreground text-xs">
                                    {{ $partner }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-10 text-muted-foreground">
                    No upcoming projects found.
                </div>
                @endforelse
            </div>
        </div>

        <!-- Completed Projects -->
        <div>
            <h2 class="text-2xl font-semibold text-foreground mb-8">Completed Projects</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($completedProjects as $project)
                <div class="bg-card rounded-xl border border-border/50 p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300">
                            <svg class="mr-1.5 h-2 w-2 text-green-400" fill="currentColor" viewBox="0 0 8 8"><circle cx="4" cy="4" r="3" /></svg>
                            {{ $project->status }}
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900/50 dark:text-indigo-300">
                            {{ $project->type }}
                        </span>
                    </div>

                    <h3 class="text-center font-bold text-lg mb-8">{{ $project->title }}</h3>

                    <div class="space-y-3 text-sm">
                        <div class="flex items-center gap-2 text-muted-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            {{ $project->location ?? 'N/A' }}
                        </div>
                        <div class="flex items-center gap-2 text-muted-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M8 10h.01"/><path d="M16 10h.01"/><path d="M8 14h.01"/><path d="M16 14h.01"/></svg>
                            {{ $project->type }}
                        </div>
                        @if($project->completion_date)
                        <div class="flex items-center gap-2 text-muted-foreground">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                            Completed {{ $project->completion_date->format('F Y') }}
                        </div>
                        @endif
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-10 text-muted-foreground">
                    No completed projects found.
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
