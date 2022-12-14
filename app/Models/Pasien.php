<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'ms_pasien';
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nama', 'tgl_lahir', 'jenis_kelamin', 'alamat'

    ];

    protected $casts = [
        'tgl_lahir' => 'date',
    ];


}
