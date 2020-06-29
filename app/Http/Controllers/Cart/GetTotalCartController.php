<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GetTotalCartController extends Controller
{
    public function __invoke(Request $request)
    {
    	$total = 0;
    	$userId = $request->input('user_id');

        $menu = DB::table('cart')->where('user_id','=',$userId)->sum('cart.price');

        return $this->response()->successData('Success to get total cart','data',$menu);
    }
}
