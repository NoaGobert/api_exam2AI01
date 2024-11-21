<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{

    public function handleResponse($data = null, $message = null, $code = 200)
    {
        $response = [
            'message' => $message ?? 'Success',
        ];

        if ($data) {
            $response['data'] = $data;
        }

        return response()->json($response, $code);
    }

    public function handleError($message = null, $code = 500)
    {
        return response()->json([
            'message' => $message ?? 'An error occurred',
        ], $code);
    }
}
