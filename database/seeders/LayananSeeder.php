<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [['nama' => 'RD'], ['nama' => 'RJ'], ['nama' => 'RI']];

        foreach ($array as $a) {

            Layanan::create($a);
        }
    }
}
