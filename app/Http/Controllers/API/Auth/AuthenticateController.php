<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticateController extends Controller
{


	/**
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function login(Request $request)
	{
		$validator = Validator::make($request->all(), [
			"email" => 'required',
            'password' => 'required',
		]);

		if ($validator->fails()) {
			return $this->sendError('Validation Error.', $validator->errors(), 400);
		}

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            return $this->sendResponse('You are logged in successfully. ', [
                'user_details'=> new UserResource($user),
                'token' => $user->createToken('MyApp')->accessToken
            ], 202);
        }
        else{
            return $this->sendError('Incorrect email or password', [], 401);
        }
    }


	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function logout()
	{
		if (Auth::check()) {
			$user =  Auth::user();
            $user->token()->revoke();
            return $this->sendResponse( 'You are logout successfully.');
		} else {
			return $this->sendError( 'You are not login correctly.', [], 404);
		}
	}


}
