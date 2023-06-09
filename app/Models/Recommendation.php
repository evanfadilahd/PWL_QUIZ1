<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    public function getReviewsCountAttribute()
    {
        return Review::where('brand', $this->brand)->count();
    }
}
