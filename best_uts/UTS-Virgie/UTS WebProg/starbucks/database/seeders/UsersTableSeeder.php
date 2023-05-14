<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "member_id" =>"1",
            "name" => "Vico Lomar",
            "star_number" => 20,
        ]);
        DB::table('users')->insert([
            "member_id" =>"2",
            "name" => "Fei Fei Li",
            "star_number" => 30,
        ]);
    }
}
