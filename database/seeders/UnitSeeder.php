<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [['nama' => 'IGD'], ['nama' => 'LAB PK']];

        foreach ($array as $a) {

            DB::table('ms_unit')->insert($a);
        }
    }
}
