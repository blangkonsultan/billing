<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tindakan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tindakan';
    protected $fillable = [
        'kelas_id', 'kunjungan_id', 'pelayanan_id','dokters_id', 'tgl_tindakan', 'harga', 'jumlah', 'subtotal'
    ];

    protected $casts = [
        'tgl_tindakan' => 'date',
    ];

    public function Ms_Tindakan(): BelongsTo
    {
        return $this->belongsTo(Ms_Tindakan::class);
    }

    public function Dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class);
    }
    public function Kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
