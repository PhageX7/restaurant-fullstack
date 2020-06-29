<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('food_categories')->insert([
         'title' => "starters",
         'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
         'image_url' => "/img/CHIPS.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_categories')->insert([
         'title' => "burgers",
         'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
         'image_url' => "/img/burger-png-the-eatery-steak-special-16.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_categories')->insert([
         'title' => "entrees",
         'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
         'image_url' => "/img/entr%C3%A9e-png-2.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_categories')->insert([
         'title' => "sides",
         'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
         'image_url' => "/img/potato_chips_PNG82.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_categories')->insert([
         'title' => "desserts",
         'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
         'image_url' => "/img/218-2181118_fudge-stuffed-cookie-dairy-queen-desserts.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_categories')->insert([
         'title' => "servings",
         'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
         'image_url' => "/img/bbq-ribs-png-13.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
      DB::table('food_categories')->insert([
         'title' => "drinks",
         'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
         'image_url' => "/img/drink-clipart-transparent-background-18.png",
         'updated_at' => Carbon::now(),
         'created_at' => Carbon::now()
     ]);
    }
}
