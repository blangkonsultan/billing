<?php

use App\Models\Dokter;
use App\Models\Ms_Tindakan;
use App\Models\Pelayanan;
use App\Models\Kelas;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Ms_Tindakan::class)->constrained('ms_tindakan')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Dokter::class)->constrained('ms_dokter')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Pelayanan::class)->constrained('pelayanan')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Kelas::class)->constrained('ms_kelas')->cascadeOnUpdate()->restrictOnDelete();
            $table->date('tgl_tindakan');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan');
    }
}
