<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Transaction::insert([
            'user_id' => 1,
            'coffee_id' => 4,
            'transaction_date' => '2023-03-19 00:00:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'coffee_id' => 7,
            'transaction_date' => '2023-03-20 00:00:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'coffee_id' => 1,
            'transaction_date' => '2023-03-21 00:00:00.00'
        ]);

        Transaction::insert([
            'user_id' => 2,
            'coffee_id' => 3,
            'transaction_date' => '2023-03-18 00:00:00.00'
        ]);

        Transaction::insert([
            'user_id' => 2,
            'coffee_id' => 8,
            'transaction_date' => '2023-03-19 00:00:00.00'
        ]);

        Transaction::insert([
            'user_id' => 2,
            'coffee_id' => 5,
            'transaction_date' => '2023-03-21 00:00:00.00'
        ]);
    }
}
