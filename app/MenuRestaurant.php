<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuRestaurant extends Model
{
    protected $table = 'menu';
    protected $fillable = ['food_category_id ','restaurant_id ','name'];
    public $timestamps= FALSE;

    public function food_category(){
        return $this->belongsTo('App\FoodCategory','id','food_category_id');
    }

    public function restaurant(){
        return $this->belongsTo('App\Restaurant','restaurant_id','id');
    }
}
