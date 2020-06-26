<?php

namespace App\Http\Controllers\Food;

use App\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetAllByRestaurantController extends Controller
{
    public function __invoke(Request $request)
    {
        $restaurantsInp = $request->input('restaurant_id');

        $menu = Food::with(['menu'])->where('restaurant_id','=',$restaurantsInp)->get();

        return $this->response()->successData('Success to get food','data',$menu);
    }
}
