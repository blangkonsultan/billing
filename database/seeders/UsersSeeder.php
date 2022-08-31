<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'name' => 'bagas',
            'email' => 'bagas@bagas.com',
            'password' => Hash::make('12345678'),
        ];

        User::create($array);
    }
}
