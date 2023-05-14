<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            "name" =>"Espresso"
        ]);
        DB::table('categories')->insert([
            "name" =>"Brewed"
        ]);
        DB::table('categories')->insert([
            "name" =>"Blended"
        ]);
        DB::table('categories')->insert([
            "name" =>"Others"
        ]);
    }
}
