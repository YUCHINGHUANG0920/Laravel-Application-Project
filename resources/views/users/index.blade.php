@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">All Users</h2>
    <!-- Users table: display all registered users -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Domains</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through users collection -->
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- Loop through user's domains -->
                        @foreach($user->domains as $domain)
                            {{ $domain->domain }}<br>
                        @endforeach
                    </td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
