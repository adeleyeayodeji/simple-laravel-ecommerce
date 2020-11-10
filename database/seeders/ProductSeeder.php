<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = "LG Mobile 2";
        $product->price = "200";
        $product->description = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam quidem laudantium aliquam quis delectus possimus impedit aut? Recusandae, maiores facere assumenda magni nihil molestiae nostrum vitae ab cum ducimus dicta!";
        $product->category = "mobile";
        $product->gallery = "https://www.lg.com/us/images/MC/features/LG-Stylo-6.jpg";
        $product->save();

        $product = new Product();
        $product->name = "LG Mobile 3";
        $product->price = "200";
        $product->description = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam quidem laudantium aliquam quis delectus possimus impedit aut? Recusandae, maiores facere assumenda magni nihil molestiae nostrum vitae ab cum ducimus dicta!";
        $product->category = "mobile";
        $product->gallery = "https://www.lg.com/us/images/MC/features/LG-Stylo-6.jpg";
        $product->save();

        $product = new Product();
        $product->name = "LG Mobile 4";
        $product->price = "200";
        $product->description = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam quidem laudantium aliquam quis delectus possimus impedit aut? Recusandae, maiores facere assumenda magni nihil molestiae nostrum vitae ab cum ducimus dicta!";
        $product->category = "mobile";
        $product->gallery = "https://www.lg.com/us/images/MC/features/LG-Stylo-6.jpg";
        $product->save();


    }
}