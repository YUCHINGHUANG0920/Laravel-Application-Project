@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Domains</h2>

    <!-- Display success message if a domain was added successfully -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Form to add a new domain -->
    <form method="POST" action="{{ route('domains.store') }}" class="mb-4">
        @csrf
        <div class="input-group">
            <input type="text" name="domain" class="form-control" placeholder="Enter domain" required>
            <button class="btn btn-primary" type="submit">Add Domain</button>
        </div>
    </form>

    <!-- List all domains for the logged-in user -->
    <ul class="list-group">
        @foreach(Auth::user()->domains as $domain)
            <li class="list-group-item">{{ $domain->domain }}</li>
        @endforeach
    </ul>
</div>
@endsection