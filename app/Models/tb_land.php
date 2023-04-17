<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_land extends Model
{
    use HasFactory;
    protected $table = 'tb_land';

    protected $primarykey = 'ID';

    public $timestamps = false;
}
