@extends('tyro-dashboard::layouts.admin')

@section('title', 'Add New Project')

@section('breadcrumb')
<a href="{{ route('tyro-dashboard.index') }}">Dashboard</a>
<span class="breadcrumb-separator">/</span>
<a href="{{ route('admin.projects.index') }}">Projects</a>
<span class="breadcrumb-separator">/</span>
<span>Add New</span>
@endsection

@section('content')
<div class="page-header">
    <div class="page-header-row">
        <div>
            <h1 class="page-title">Add New Project</h1>
            <p class="page-description">Create a new real estate project.</p>
        </div>
        <div class="page-header-actions">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="icon-sm mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to List
            </a>
        </div>
    </div>
</div>

<div class="card">
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-row">
                <!-- Title -->
                <div class="form-group">
                    <label for="title" class="form-label required">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" id="title" class="form-input @error('title') is-invalid @enderror" value="{{ old('title') }}" required placeholder="e.g. Skyline Tower">
                    @error('title')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Type -->
                <div class="form-group">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="type" class="form-select @error('type') is-invalid @enderror">
                        <option value="">Select Type</option>
                        <option value="Development" {{ old('type') == 'Development' ? 'selected' : '' }}>Development</option>
                        <option value="Investment Management" {{ old('type') == 'Investment Management' ? 'selected' : '' }}>Investment Management</option>
                        <option value="Construction" {{ old('type') == 'Construction' ? 'selected' : '' }}>Construction</option>
                        <option value="Public Sector" {{ old('type') == 'Public Sector' ? 'selected' : '' }}>Public Sector</option>
                    </select>
                    @error('type')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <!-- Status -->
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                        <option value="">Select Status</option>
                        <option value="Upcoming" {{ old('status') == 'Upcoming' ? 'selected' : '' }}>Upcoming</option>
                        <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Listed" {{ old('status') == 'Listed' ? 'selected' : '' }}>Listed</option>
                        <option value="Sold" {{ old('status') == 'Sold' ? 'selected' : '' }}>Sold</option>
                        <option value="Fully Leased" {{ old('status') == 'Fully Leased' ? 'selected' : '' }}>Fully Leased</option>
                    </select>
                    @error('status')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Completion Date -->
                <div class="form-group">
                    <label for="completion_date" class="form-label">Completion Date</label>
                    <input type="date" name="completion_date" id="completion_date" class="form-input @error('completion_date') is-invalid @enderror" value="{{ old('completion_date') }}">
                    @error('completion_date')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <!-- Units -->
                <div class="form-group">
                    <label for="units" class="form-label">Units</label>
                    <input type="text" name="units" id="units" class="form-input @error('units') is-invalid @enderror" value="{{ old('units') }}" placeholder="e.g. 150 Units">
                    @error('units')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <!-- SF -->
                <div class="form-group">
                    <label for="sf" class="form-label">Square Footage</label>
                    <input type="text" name="sf" id="sf" class="form-input @error('sf') is-invalid @enderror" value="{{ old('sf') }}" placeholder="e.g. 250,000 SF">
                    @error('sf')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" id="location" class="form-input @error('location') is-invalid @enderror" value="{{ old('location') }}" placeholder="e.g. New York, NY">
                @error('location')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="partners" class="form-label">Partners</label>
                <input type="text" name="partners" id="partners" class="form-input @error('partners') is-invalid @enderror" value="{{ old('partners') }}" placeholder="e.g. Partner A, Partner B">
                <div class="form-hint">Separate multiple partners with commas.</div>
                @error('partners')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image" class="form-label">Project Image</label>
                <div class="flex items-center gap-4">
                    <label class="btn btn-secondary cursor-pointer">
                        <span>Choose File</span>
                        <input type="file" name="image" id="image" class="hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0]); document.getElementById('image-preview-container').classList.remove('hidden');">
                    </label>
                    <span class="text-sm text-muted">Recommended size: 800x600px</span>
                </div>
                <div id="image-preview-container" class="mt-4 hidden">
                    <img id="image-preview" src="" alt="Preview" class="rounded-lg border border-border" style="max-height: 200px; object-fit: cover;">
                </div>
                @error('image')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="5" class="form-textarea @error('description') is-invalid @enderror" placeholder="Project details...">{{ old('description') }}</textarea>
                @error('description')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="card-footer" style="display: flex; gap: 0.75rem;">
            <button type="submit" class="btn btn-primary">Create Project</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
