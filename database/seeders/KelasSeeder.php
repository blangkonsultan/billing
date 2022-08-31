<?php

namespace Database\Seeders;

use App\Models\Kelas;
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

           Kelas::create($a);
        }
    }
}
