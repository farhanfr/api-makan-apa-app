<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurant';
    protected $fillable = ['name ','front_photo','back_photo'];
    public $timestamps= FALSE;

//    public function user(){
//        return $this->hasMany('App\User','id','id_user');
//    }
//
//    public function type() {
//        return $this->belongsTo('App\ProductType','type_id','id');
//    }
}
