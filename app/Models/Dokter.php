<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'ms_dokter';
    public $timestamps = false;
    protected $fillable = [
        'nip', 'nama'
    ];
}
