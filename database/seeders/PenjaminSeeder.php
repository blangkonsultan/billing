<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [['nama' => 'BPJS'], ['nama' => 'UMUM']];

        foreach ($array as $a) {

            DB::table('ms_penjamin')->insert($a);
        }
    }
}
