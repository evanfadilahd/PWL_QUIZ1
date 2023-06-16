<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_supplocations extends Model
{
    use HasFactory;

    // protected $guarded = ['id', 'created_at', 'update_at'];

    // protected $fillable = ['nama_lokasi', 'latidute', 'longitude'];

    protected $fillable = ['id', 'latlong', 'nama_tempat'];

}
