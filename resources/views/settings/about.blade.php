@extends('vendor.tyro-dashboard.layouts.admin')

@section('title', 'About Page Settings')

@push('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editors = document.querySelectorAll('.richtext-editor');
            editors.forEach(function(editorDiv) {
                var key = editorDiv.getAttribute('data-key');
                var quill = new Quill(editorDiv, {
                    theme: 'snow'
                });
                var textarea = document.getElementById(key);

                // Set initial content
                if (textarea.value) {
                    quill.root.innerHTML = textarea.value;
                }

                quill.on('text-change', function() {
                    textarea.value = quill.root.innerHTML;
                });
            });
        });
    </script>
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">About Page Settings</h1>
        <p class="page-description">Manage content and SEO for the About Us page.</p>
    </div>
</div>

<form action="{{ route('settings.update') }}" method="POST">
    @csrf
    @method('PUT')

    @foreach($settings as $group => $groupSettings)
    <div class="card" style="margin-bottom: 1.5rem;">
        <div class="card-header">
            <h3 class="card-title" style="text-transform: capitalize;">{{ str_replace('_', ' ', $group) }} Settings</h3>
        </div>
        <div class="card-body">
            @foreach($groupSettings as $setting)
            <div class="form-group">
                <label for="{{ $setting->key }}" class="form-label">
                    {{ $setting->label ?? $setting->key }}
                </label>

                @if($setting->type === 'textarea')
                <textarea name="{{ $setting->key }}" id="{{ $setting->key }}" class="form-textarea" rows="3">{{ old($setting->key, $setting->value) }}</textarea>
                @elseif($setting->type === 'richtext')
                <div class="richtext-wrapper">
                    <div id="editor-{{ $setting->key }}" class="richtext-editor" data-key="{{ $setting->key }}" style="height: 200px; background: #fff;"></div>
                    <textarea name="{{ $setting->key }}" id="{{ $setting->key }}" style="display:none">{{ old($setting->key, $setting->value) }}</textarea>
                </div>
                @else
                <input type="text" name="{{ $setting->key }}" id="{{ $setting->key }}" value="{{ old($setting->key, $setting->value) }}" class="form-input">
                @endif
            </div>
            @endforeach
        </div>
    </div>
    @endforeach

    <div style="display: flex; justify-content: flex-end; padding-bottom: 2.5rem;">
        <button type="submit" class="btn btn-primary">
            Save Changes
        </button>
    </div>
</form>
@endsection
