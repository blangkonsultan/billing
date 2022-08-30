<?php

namespace Database\Seeders;

use App\Helpers\NipGenerator;
use App\Models\Dokter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = [['nip' => '19920116.001', 'nama' => 'Buff'], ['nip' => '19950126.002',  'nama' => 'Kader']];

        foreach ($array as $a) {
            DB::table('ms_dokter')->insert($a);
        }
    }
}
