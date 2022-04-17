<?php

namespace App\Traits;

trait ApiResponser
{
    public function apiSuccessResponse($message, $data = null, $code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
            'status_code' => $code,
        ]);

    }

    public function apiSuccessPaginateResponse($message, $code = 200)
    {
        return [
            'status' => 'success',
            'message' => $message,
            'status_code' => $code,
        ];

    }


    public function apiErrorResponse($message, $error = null, $code = 400)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $error,
            'status_code' => $code,
        ],$code);
    }

}
