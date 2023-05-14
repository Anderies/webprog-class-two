<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            "user_id" =>"1",
            "product_id" => "2",
            "created_at" =>Carbon::parse('2023-03-19'),
            "updated_at"=>Carbon::parse('2023-03-19')
        ]);
        DB::table('transactions')->insert([
            "user_id" =>"1",
            "product_id" => "3",
            "created_at" =>Carbon::parse('2023-03-20'),
            "updated_at"=>Carbon::parse('2023-03-20')
        ]);
        DB::table('transactions')->insert([
            "user_id" =>"1",
            "product_id" => "4",
            "created_at" =>Carbon::parse('2023-03-21'),
            "updated_at"=>Carbon::parse('2023-03-21')
        ]);

        DB::table('transactions')->insert([
            "user_id" =>"2",
            "product_id" => "6",
            "created_at" =>Carbon::parse('2023-03-18'),
            "updated_at"=>Carbon::parse('2023-03-18')
        ]);
        DB::table('transactions')->insert([
            "user_id" =>"2",
            "product_id" => "7",
            "created_at" =>Carbon::parse('2023-03-19'),
            "updated_at"=>Carbon::parse('2023-03-19')
        ]);
        DB::table('transactions')->insert([
            "user_id" =>"2",
            "product_id" => "9",
            "created_at" =>Carbon::parse('2023-03-21'),
            "updated_at"=>Carbon::parse('2023-03-21')
        ]);
    }
}
