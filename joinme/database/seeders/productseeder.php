<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use Faker\Factory as Faker;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<=200; $i++){
            $product_seeder = new product;
            $product_seeder->Name= $faker->name;
            $product_seeder->stock=$faker->numberBetween(1, 1000);
            $product_seeder->price=$faker->randomFloat(2);
            $product_seeder->description=$faker->paragraph;
            $product_seeder->fileName= "storage/app/products/test.jpg";//$faker->image("storage/app/products/", 300, 300, false);
            $product_seeder->save();
        }

    }
}
