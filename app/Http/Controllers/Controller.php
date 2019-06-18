<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * success response method.
     * @param $message
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendResponse($message, $data = [], $status = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if(array_key_exists('data', $data)){
            $response['data'] = $data['data'];
        }else{
            $response['data'] = $data;
        }

        return response()->json($response, $status);
    }

    /**
     * @param $request
     * @param $rules
     * @param array $customErrorMessages
     * @return bool
     */
    public function validateRequest($request, $rules, $customErrorMessages = [])
    {

        $validator = Validator::make($request->all(), $rules, $customErrorMessages);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->sendError('Validation Error!', $errors->all(), 400);
        }
        return true;
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
