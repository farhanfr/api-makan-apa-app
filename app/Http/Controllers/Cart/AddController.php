<?php

namespace App\Http\Controllers\Cart;

use App\Cart;
use App\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AddController extends Controller
{
    public function __invoke(Request $request)
    {
//        $validator = Validator::make($request->all(),[
//            'user_id ' => 'required',
//            'user_id' => 'required',
//            'destination_id' => 'required',
//            'comment' => 'required'
//        ]);

//        if($validator->fails()){
//            return $this->response()->failMessage($validator->errors()->all());
//        }

        $data = [
            'user_id' => $request->input('user_id'),
            'food_id' => $request->input('food_id'),
            'qty' => $request->input('qty'),
            'price' => $request->input('price')
        ];

        $this->create($data);

        return $this->response()->successMessage('Success to add cart');

    }

    private function create($data) {
        Cart::insert([
            'user_id' => $data['user_id'],
            'food_id' => $data['food_id'],
            'qty' => $data['qty'],
            'price' => $data['price']
        ]);
    }


}
