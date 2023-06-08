<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_productfarms extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'item_id', 'id');
    }

}