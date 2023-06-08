<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        if ($query) {
            $recommendations = Recommendation::where('brand', 'like', "%$query%")
                ->orderBy('average_rating', 'desc')
                ->get();
        } else {
            $recommendations = Recommendation::orderBy('average_rating', 'desc')->get();
        }

        return view('recommendations.index', compact('recommendations', 'query'));
    }
}
