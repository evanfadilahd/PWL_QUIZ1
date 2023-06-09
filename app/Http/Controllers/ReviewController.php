<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->paginate(10);
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'brand' => 'required|string',
            'location' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }
}