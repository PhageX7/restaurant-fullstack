<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('food_items')->insert([
         'title' => "Texas burger",
         'description' => "Lettuce, Tomatoes, Pickles, Onions, Ketchup, Mustard, Relish, and Mayo",
         'price' => 9.99,
         'category_id' => 2,
         'image_url' => "/img/bbq-ribs-png-13.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_items')->insert([
         'title' => "BBQ burger",
         'description' => "Lettuce, Tomatoes, Pickles, Onions, Ketchup, Mustard, Relish, and Mayo",
         'price' => 9.99,
         'category_id' => 2,
         'image_url' => "/img/bbq-ribs-png-13.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_items')->insert([
         'title' => "Billys burger",
         'description' => "Lettuce, Tomatoes, Pickles, Onions, Ketchup, Mustard, Relish, and Mayo",
         'price' => 9.99,
         'category_id' => 2,
         'image_url' => "/img/bbq-ribs-png-13.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
    }
}
