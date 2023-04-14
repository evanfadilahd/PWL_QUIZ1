<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_request extends Model
{
    use HasFactory;
    protected $table = 'tb_billboard';

    protected $primarykey = 'billboard_id';
}
