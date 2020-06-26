<?php

namespace App\Http\Controllers\FoodCategory;

use App\FoodCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetSecondCategoryController extends Controller
{
    public function __invoke()
    {
        $restaurants = FoodCategory::whereIn('id',['5','6','7','8'])->get();

        return $this->response()->successData('Success to get secon food category','data',$restaurants);
    }
}
