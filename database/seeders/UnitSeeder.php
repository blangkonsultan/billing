<?php

namespace Database\Seeders;

use App\Models\Unit;
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

            Unit::create($a);
        }
    }
}
