@extends('layout.layout')

@section('isi')

    {{-- <title>Brand Recommendations</title> --}}

    <div class="container mt-4">
        <h2>Recommended Items</h2>

        <form action="{{ route('recommendations.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="q" placeholder="Search for a brand..." value="{{ $query }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>

        <ul class="list-group mt-4">
            @forelse($recommendations as $recommendation)
                <li class="list-group-item">
                    <h5>{{ $recommendation->brand }}</h5>
                    <p>Average Rating: {{ $recommendation->average_rating }}</p>
                    <p>Number of Customers: {{ $recommendation->reviews_count }}</p>
                </li>
            @empty
                <li class="list-group-item">No recommendations available.</li>
            @endforelse
        </ul>
    </div>

@endsection