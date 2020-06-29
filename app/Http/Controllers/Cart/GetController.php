<?php

namespace App\Http\Controllers\Cart;

use App\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetController extends Controller
{
    public function __invoke(Request $request)
    {
        $userId = $request->input('user_id');

        $menu = Cart::with(['food'])->where('user_id','=',$userId)->get();

        return $this->response()->successData('Success to get cart','data',$menu);
    }
}
