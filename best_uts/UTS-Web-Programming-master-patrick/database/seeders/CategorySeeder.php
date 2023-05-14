<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::insert([
            'category_name' => 'Espresso'
        ]);

        Category::insert([
            'category_name' => 'Blended'
        ]);

        Category::insert([
            'category_name' => 'Brewed'
        ]);

        Category::insert([
            'category_name' => 'Non-Coffee'
        ]);
    }
}
