<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
  protected $table = 'food_items';

  protected $fillable = [
    'title', 'description', 'image_url', 'price', 'category_id'
  ];

  public function food_items() {
    return $this->hasMany('App\FoodItem', 'category_id');
  }
}
