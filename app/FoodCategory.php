<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $table = 'food_category';
    protected $fillable = ['name ','icon'];
    public $timestamps= FALSE;
}
