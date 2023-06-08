<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::created(function ($review) {
            $review->updateBrandAverageRating();
        });

        static::updated(function ($review) {
            $review->updateBrandAverageRating();
        });

        static::deleted(function ($review) {
            $review->updateBrandAverageRating();
        });
    }

    public function updateBrandAverageRating()
    {
        $brand = $this->brand;
        $averageRating = $this->where('brand', $brand)->avg('rating');

        Recommendation::updateOrCreate(
            ['brand' => $brand],
            ['average_rating' => $averageRating]
        );
    }
}
