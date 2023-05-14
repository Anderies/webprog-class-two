<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memberships')->insert([
            "name" =>"Gold",
            "hex_code" => "#C6A961"
        ]);
        DB::table('memberships')->insert([
            "name" =>"Green",
            "hex_code" => "#006F42"
        ]);
    }
}
