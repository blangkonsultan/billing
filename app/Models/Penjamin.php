<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjamin extends Model
{
    protected $table = 'ms_penjamin';
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nama'

    ];

    protected $casts = [
        'tgl_lahir' => 'date',
    ];
}
