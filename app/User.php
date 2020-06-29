<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['name_user ','number_phone','address','token'];
    public $timestamps= FALSE;

    // protected $hidden = ['token'];
}
