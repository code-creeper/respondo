<?php

namespace CodeCreeper\Respondo;

trait ResponseMethods
{
    protected function sendError($errorMessages = 'Something went wrong, internal server error.', $code = 500, $result = [])
    {
        $response = [
            'metadata' => [
                'message' => $errorMessages,
            ],
            'payload' => $result,
        ];

        return response()->json($response, $code);
    }

    protected function sendResponse($result, $message = '', $code = 200)
    {
        $response = [
            'metadata' => [
                'message' => $message,
            ],
            'payload' => $result,
        ];

        return response()->json($response, $code);
    }
}
