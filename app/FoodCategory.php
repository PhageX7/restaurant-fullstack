<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $table = 'food_categories';

    public function food_categories() {
      return $this->belongsTo('App\FoodCategory');
    }
}
