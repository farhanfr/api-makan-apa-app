<?php

namespace App\Http\Controllers\Restaurant;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $restaurants = Restaurant::all();

        return $this->response()->successData('Success to get restaurant','data',$restaurants);
    }
}
