@extends('layout.layout')

@section('isi')

    {{-- <title>Star Rating</title> --}}
    <div class="container mt-4">
        <h2>Star Rating</h2>
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Reviews</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Rating</th>
                            <th>Comment</th>
                            <th>Brand</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $review)
                            <tr>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </td>
                                <td>{{ $review->comment }}</td>
                                <td>{{ $review->brand }}</td>
                                <td>{{ $review->location }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $reviews->links() }}
            </div>
            <div class="col-md-6">
                <h4>Add Review</h4>
                <form method="POST" action="{{ route('reviews.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <div class="rating-stars">
                            @for($i = 1; $i <= 5; $i++)
                                <input type="radio" name="rating" value="{{ $i }}" id="rating{{ $i }}" style="display: none;">
                                <label for="rating{{ $i }}"><i class="far fa-star" onclick="handleRatingClick({{ $i }})"></i></label>
                            @endfor
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" name="comment" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control" name="brand" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" name="location" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
