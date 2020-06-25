<?php
/**
 * Created by PhpStorm.
 * User: reacts
 * Date: 6/25/2020
 * Time: 10:13
 */

namespace App\Helper;


class ResponseHelper
{
    public function successMessage($message) {
        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }

    public function successData($message,$key,$data) {
        return response()->json([
            'status' => true,
            'message' => $message,
            $key => $data
        ]);
    }

    public function successData2($data) {
        return response()->json($data);
    }

    public function failMessage($message) {
        return response()->json([
            'status' => false,
            'message' => $message
        ]);
    }
}