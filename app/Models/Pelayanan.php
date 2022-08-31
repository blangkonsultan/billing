<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelayanan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pelayanan';
    protected $fillable = [
        'kunjungan_id', 'unit_id', 'tgl_pelayanan'
    ];

    protected $casts = [
        'tgl_pelayanan' => 'date',
    ];

    public function kunjungan(): BelongsTo
    {
        return $this->belongsTo(Kunjungan::class);
    }

    public function Unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}
