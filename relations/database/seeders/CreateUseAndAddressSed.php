<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;

class CreateUseAndAddressSed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Mizael",
            "email" => "mizael@email.com",
            "password" => Hash::make("123456"),
        ]);

        DB::table('address')->insert([
            "address" => "Rua Limeira numero 30"
        ]);
    }
}