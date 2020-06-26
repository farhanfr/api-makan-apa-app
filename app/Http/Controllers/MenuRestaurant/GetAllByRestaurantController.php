<?php

namespace App\Http\Controllers\MenuRestaurant;

use App\MenuRestaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetAllByRestaurantController extends Controller
{
    public function __invoke(Request $request)
    {
        $restaurantsInp = $request->input('restaurant_id');

        $menu = MenuRestaurant::with(['restaurant'])->where('restaurant_id','=',$restaurantsInp)->get();

        return $this->response()->successData('Success to get menu food','data',$menu);
    }
}
