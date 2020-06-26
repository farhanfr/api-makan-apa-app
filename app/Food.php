<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    protected $fillable = ['food_category_id ','restaurant_id','menu_id ','name','price','photo'];
    public $timestamps= FALSE;

    public function menu(){
        return $this->belongsTo('App\MenuRestaurant','menu_id','id');
    }
}
