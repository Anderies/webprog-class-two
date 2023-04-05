<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Anderies',
        //         'email' => 'anderies@binus.ac.id',
        //         'password' => Hash::make('password'),
        //     ],
        // ]);

        // User::factory()->count(10)->create();
        User::factory(10)->create()->each(
            function ($user) {
                // get from phone Model
                Phone::create([
                    'user_id' => $user->id,
                    'phone' => fake()->phoneNumber()
                ]);
            }
        );
    }
}
