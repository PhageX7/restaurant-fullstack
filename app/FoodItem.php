<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
  protected $table = 'food_items';
  
  public function food_items() {
    return $this->hasMany('App\FoodItem', 'category_id');
  }
}
