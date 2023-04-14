<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_sell extends Model
{
    use HasFactory;
    protected $fillable = ['sell_username', 'sell_goods', 'sell_stock', 'sell_price', 'sell_desc'];
    protected $table = 'tb_sell';

    protected $primarykey = 'sell_id';
}
