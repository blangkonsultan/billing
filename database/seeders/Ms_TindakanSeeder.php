<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ms_TindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = [['nama' => 'ESI Level 1', 'harga' => '45000'], ['nama' => 'Darah Lengkap', 'harga' => '80000']];

        foreach($array as $a){

        DB::table('ms_tindakan')->insert($a);

        }

    }
}
