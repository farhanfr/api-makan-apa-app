<?php

namespace App\Http\Controllers\FoodCategory;

use App\FoodCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $restaurants = FoodCategory::all();

        return $this->response()->successData('Success to get food category','data',$restaurants);
    }
}
