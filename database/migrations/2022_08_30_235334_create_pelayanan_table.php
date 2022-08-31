<?php

use App\Models\Kunjungan;
use App\Models\Unit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Kunjungan::class)->constrained('kunjungan')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Unit::class)->constrained('ms_unit')->cascadeOnUpdate()->restrictOnDelete();
            $table->date('tgl_pelayanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayanan');
    }
}
