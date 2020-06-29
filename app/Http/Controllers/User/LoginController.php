<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Exception;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $numberPhone = $request->input('number_phone');

        $data=[
            'number_phone'=>$numberPhone
        ];

        try {

            $user = $this->login($data);

            $secret = Hash::make($user);

            $user->token = $secret;
            $user->save();

            $data = [
                'user' => $user
            ];

            return $this->response()->successData('Success to login','data',$data);

        }catch (Exception $exception) {

            return $this->response()->failMessage([$exception->getMessage()]);

        }

    }

    public function login($data){
        if(!$user = User::where([
            ['number_phone','=',$data['number_phone']]
        ])->first()) {
            throw new Exception('Number phone not registered');
        }

//        if(!Hash::check($data['password'],$user->password)) {
//            throw new Exception('Sorry, Password incorrect');
//        }

        return $user;

    }
}
