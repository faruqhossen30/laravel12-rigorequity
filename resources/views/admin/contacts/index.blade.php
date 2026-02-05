@extends('tyro-dashboard::layouts.admin')

@section('title', 'Contacts')

@section('breadcrumb')
<a href="{{ route('tyro-dashboard.index') }}">Dashboard</a>
<span class="breadcrumb-separator">/</span>
<span>Contacts</span>
@endsection

@section('content')
<div class="page-header">
    <div class="page-header-row">
        <div>
            <h1 class="page-title">Contacts</h1>
            <p class="page-description">View and manage contact form submissions.</p>
        </div>
    </div>
</div>

<div class="card">
    @if($contacts->count())
    <div class="table-container">
        <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company</th>
                            <th>Inquiry Type</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ ($contacts->currentPage() - 1) * $contacts->perPage() + $loop->iteration }}</td>
                            <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                            <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                            <td>{{ $contact->phone ?? '-' }}</td>
                            <td>{{ $contact->company ?? '-' }}</td>
                            <td>
                                <span class="badge badge-primary">{{ ucfirst(str_replace('-', ' ', $contact->inquiry_type)) }}</span>
                            </td>
                            <td>
                                <span title="{{ $contact->message }}">{{ Str::limit($contact->message, 50) }}</span>
                            </td>
                            <td>{{ $contact->created_at->format('M d, Y H:i') }}</td>
                            <td class="text-right">
                                <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-icon" title="View Details">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
    @if($contacts->hasPages())
        <div class="card-footer">
            {{ $contacts->links() }}
        </div>
    @endif
    @else
    <div class="card-body">
        <div class="empty-state">
            <div class="empty-state-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
            </div>
            <h3>No contacts found</h3>
            <p class="text-muted">There are no contact submissions yet.</p>
        </div>
    </div>
    @endif
</div>
@endsection
