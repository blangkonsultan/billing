<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [['nama' => 'NON KELAS'], ['nama' => 'KELAS 1']];

        foreach ($array as $a) {

            DB::table('ms_kelas')->insert($a);
        }
    }
}
