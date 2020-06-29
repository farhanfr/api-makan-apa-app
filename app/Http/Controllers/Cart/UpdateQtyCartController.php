<?php

namespace App\Http\Controllers\Cart;

use App\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateQtyCartController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = [
            'id' => $request->input('id'),
            'qty' => $request->input('qty'),
        ];

        if(!$product = Cart::find($data['id'])) {
            return $this->response()->failMessage(['Sorry, this item cart is not available']);
        }

        $this->update($product,$data);

        return $this->response()->successMessage('Success to update qty');

    }

    private function update($product, $data) {

        $product->qty = $data['qty'];
        $product->price = $product->price * $data['qty'];
        $product->save();

    }
}
