<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $timestamps = FALSE;
    protected $table = 'ms_pasien';
    use HasFactory;

    protected $fillable = [
        'no_rm', 'nama', 'tgl_lahir', 'jenis_kelamin', 'alamat'

    ];

    protected $casts = [
        'tgl_lahir' => 'date',
    ];


}
