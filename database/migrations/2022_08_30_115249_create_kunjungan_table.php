<?php

use App\Models\Layanan;
use App\Models\Pasien;
use App\Models\Penjamin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pasien::class)->constrained('ms_pasien')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Layanan::class)->constrained('ms_layanan')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Penjamin::class)->constrained('ms_penjamin')->cascadeOnUpdate()->restrictOnDelete();
            $table->date('tgl_mulai');
            $table->date('tgl_selesai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kunjungan');
    }
}
