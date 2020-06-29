<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $table = 'food_catergories';
    public function food_items() {
      return this->hasMany('App\FoodItem', 'category_id');
    }
}
