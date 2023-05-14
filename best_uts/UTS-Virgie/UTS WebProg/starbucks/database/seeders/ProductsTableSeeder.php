<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "category_id" =>"1",
            "name" => "Caffè Latte",
            "price" => 10000,
            "image_path" =>"/Espresso/1.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"1",
            "name" => "Cappuccino",
            "price" => 15000,
            "image_path" =>"/Espresso/2.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"1",
            "name" => "Caffè Mocha",
            "price" => 12000,
            "image_path" =>"/Espresso/3.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"1",
            "name" => "Caramel Macchiato",
            "price" => 15000,
            "image_path" =>"/Espresso/4.jpg"
        ]);

        DB::table('products')->insert([
            "category_id" =>"2",
            "name" => "Freshly Brewed",
            "price" => 20000,
            "image_path" =>"/Brewed/1.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"2",
            "name" => "Misto",
            "price" => 23000,
            "image_path" =>"/Brewed/2.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"2",
            "name" => "Cold Brew",
            "price" => 30000,
            "image_path" =>"/Brewed/3.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"2",
            "name" => "Vanilla Sweet Cream",
            "price" => 30000,
            "image_path" =>"/Brewed/4.jpg"
        ]);

        DB::table('products')->insert([
            "category_id" =>"3",
            "name" => "Mocha",
            "price" => 50000,
            "image_path" =>"/Blended/1.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"3",
            "name" => "Mango Passion",
            "price" => 56000,
            "image_path" =>"/Blended/2.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"3",
            "name" => "Raspberry Currant",
            "price" => 50000,
            "image_path" =>"/Blended/3.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"3",
            "name" => "Espresso",
            "price" => 10000,
            "image_path" =>"/Blended/4.jpg"
        ]);

        DB::table('products')->insert([
            "category_id" =>"4",
            "name" => "Chocolate",
            "price" => 10000,
            "image_path" =>"/Others/1.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"4",
            "name" => "Green Tea Latter",
            "price" => 20000,
            "image_path" =>"/Others/2.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"4",
            "name" => "Chai Tea",
            "price" => 10000,
            "image_path" =>"/Others/3.jpg"
        ]);

        
        DB::table('products')->insert([
            "category_id" =>"4",
            "name" => "Black Tea",
            "price" => 40000,
            "image_path" =>"/Others/4.jpg"
        ]);
    }
}
