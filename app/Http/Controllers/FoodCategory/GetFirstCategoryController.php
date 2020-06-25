<?php

namespace App\Http\Controllers\FoodCategory;

use App\FoodCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetFirstCategoryController extends Controller
{
    public function __invoke()
    {
        $restaurants = FoodCategory::whereIn('id',['1','2','3','4'])->get();

        return $this->response()->successData('Success to get food category','data',$restaurants);
    }
}
