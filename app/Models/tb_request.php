<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_request extends Model
{
    use HasFactory;
    protected $fillable = ['request_username', 'request_goods', 'request_desc'];
    protected $table = 'tb_request';

    protected $primarykey = 'request_id';

    public $timestamps = false;
}
