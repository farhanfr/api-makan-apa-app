<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    protected $fillable = ['food_category_id ','restaurant_id','name','price'];
    public $timestamps= FALSE;
}
