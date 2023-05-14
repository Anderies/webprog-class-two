<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Coffee::insert([
            'coffee_name' => 'Caffe Latte',
            'price' => 45000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/x8V1WKs/caffe-Latte.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Cappuccino',
            'price' => 47000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/dJcHMJx/cappuccino.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Caffe Mocha',
            'price' => 56000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/Hz3Lcw9/caffe-Mocha.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Caramel Macchiato',
            'price' => 60000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/7WYqPQm/caramel-Macchiato.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Caffe Americano',
            'price' => 38000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/JvXnDr9/caffe-Americano.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Espresso Macchiato',
            'price' => 55000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/vkFz2hB/espresso-Macchiato.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Flat White',
            'price' => 35000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/t36VtHq/flat-White.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Cocoa Cappuccino',
            'price' => 53000,
            'category_id' => 1,
            'image_url' => 'https://i.ibb.co/MDVTQxf/cocoa-Cappuccino.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Coffee Frappuccino',
            'price' => 45000,
            'category_id' => 2,
            'image_url' => 'https://i.ibb.co/BsfWYm6/coffee-Frappuccino.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Espresso Frappuccino',
            'price' => 53000,
            'category_id' => 2,
            'image_url' => 'https://i.ibb.co/N9GJvCh/espresso-Frappuccino.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Mocha Frappuccino',
            'price' => 53000,
            'category_id' => 2,
            'image_url' => 'https://i.ibb.co/vHqCpWr/mocha-Frappuccino.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Caramel Frappuccino',
            'price' => 53000,
            'category_id' => 2,
            'image_url' => 'https://i.ibb.co/Dz57BZm/caramel-Frappuccino.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Hazelnut Frappuccino',
            'price' => 53000,
            'category_id' => 2,
            'image_url' => 'https://i.ibb.co/4Nc1KgY/hazelnut-Frappuccino.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Fresh Brewed Coffee',
            'price' => 23000,
            'category_id' => 3,
            'image_url' => 'https://i.ibb.co/1rpFWbj/fresh-Brewed-Coffee.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Misto',
            'price' => 24000,
            'category_id' => 3,
            'image_url' => 'https://i.ibb.co/hZ9KFd2/misto.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Cold Brew',
            'price' => 45000,
            'category_id' => 3,
            'image_url' => 'https://i.ibb.co/CVBVrBw/coldBrew.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Green Tea Latte',
            'price' => 55000,
            'category_id' => 4,
            'image_url' => 'https://i.ibb.co/bgFr0N1/green-Tea-Latte.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Chai Tea Latte',
            'price' => 53000,
            'category_id' => 4,
            'image_url' => 'https://i.ibb.co/4TbP2F2/chai-Tea-Latte.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Earl Grey Tea Latte',
            'price' => 53000,
            'category_id' => 4,
            'image_url' => 'https://i.ibb.co/PD7q539/earl-Grey-Tea-Latte.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Black Tea Latte',
            'price' => 53000,
            'category_id' => 4,
            'image_url' => 'https://i.ibb.co/WvqPtwm/black-Tea-Latte.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Signature Chocolate',
            'price' => 55000,
            'category_id' => 4,
            'image_url' => 'https://i.ibb.co/2j2h7Y8/signature-Chocolate.jpg'
        ]);
    }
}
