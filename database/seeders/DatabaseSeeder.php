<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PasienSeeder::class,
            UsersSeeder::class,
            Ms_TindakanSeeder::class,
            DokterSeeder::class,
            LayananSeeder::class,
            PenjaminSeeder::class,
            UnitSeeder::class,
            KelasSeeder::class,
        ]);
    }
}
