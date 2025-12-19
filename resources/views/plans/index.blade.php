@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Display success message if a plan was bought successfully -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <!-- Loop through all plans and display each in a Bootstrap card -->
        @foreach($plans as $plan)
            <div class="col-md-4 mb-4">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">

                        <!-- Plan Name -->
                        <h5 class="card-title">{{ $plan->plan_name }}</h5>

                        <!-- Plan Price -->
                        <h6 class="card-subtitle mb-2 text-muted">${{ $plan->price }}</h6>

                        <!-- Plan Features -->
                        <ul class="list-group list-group-flush mb-3 flex-grow-1">
                            @foreach($plan->features as $key => $value)
                                <li class="list-group-item">
                                    @if(is_numeric($key))
                                        {{ $value }}
                                    @else
                                        <strong>{{ $key }}:</strong> {{ $value }}
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        
                        <!-- Buy Button -->
                        <form method="POST" action="/plans/buy/{{ $plan->id }}" class="mt-auto">
                            @csrf
                            <button class="btn btn-primary w-100">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
