@extends('tyro-dashboard::layouts.admin')

@section('title', 'Projects')

@section('breadcrumb')
<a href="{{ route('tyro-dashboard.index') }}">Dashboard</a>
<span class="breadcrumb-separator">/</span>
<span>Projects</span>
@endsection

@section('content')
<div class="page-header">
    <div class="page-header-row">
        <div>
            <h1 class="page-title">Projects</h1>
            <p class="page-description">Manage your real estate projects.</p>
        </div>
        <div class="page-header-actions">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="icon-sm mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Add New Project
            </a>
        </div>
    </div>
</div>

<div class="card">
    @if($projects->count())
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 50px;">SL</th>
                    <th style="width: 60px;">Image</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Location</th>
                    <th>Completion Date</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ ($projects->currentPage() - 1) * $projects->perPage() + $loop->iteration }}</td>
                    <td>
                        @if($project->image)
                            <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="avatar avatar-sm rounded">
                        @else
                            <div class="avatar avatar-sm rounded bg-light text-muted flex items-center justify-center">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 16px; height: 16px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                    </td>
                    <td>
                        <div class="font-medium">{{ $project->title }}</div>
                        <div class="text-xs text-muted">{{ $project->slug }}</div>
                    </td>
                    <td>{{ $project->type }}</td>
                    <td>
                        @php
                            $statusClass = match($project->status) {
                                'Upcoming' => 'badge-info',
                                'Completed' => 'badge-success',
                                'Listed' => 'badge-warning',
                                'Sold' => 'badge-danger',
                                'Fully Leased' => 'badge-primary',
                                default => 'badge-secondary',
                            };
                        @endphp
                        <span class="badge {{ $statusClass }}">{{ $project->status }}</span>
                    </td>
                    <td>{{ $project->location ?? '-' }}</td>
                    <td>{{ $project->completion_date ? $project->completion_date->format('M Y') : '-' }}</td>
                    <td class="text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-icon" title="Edit">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-icon text-danger" title="Delete">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if($projects->hasPages())
        <div class="card-footer">
            {{ $projects->links() }}
        </div>
    @endif
    @else
    <div class="card-body">
        <div class="empty-state">
            <div class="empty-state-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <h3>No projects found</h3>
            <p class="text-muted">Get started by adding your first project.</p>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mt-3">Add New Project</a>
        </div>
    </div>
    @endif
</div>
@endsection
