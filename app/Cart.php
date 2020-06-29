<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = ['user_id ','food_id','qty'];
    public $timestamps= FALSE;

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function food(){
        return $this->belongsTo('App\Food','food_id','id');
    }

}
