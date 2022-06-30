<?php

namespace App\Http\Controllers;

use Hash;
use Validator;
use Exception;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{

	public function login (Request $request) {

        $validator = Validator::make($request->all(), [
            'username' 	=> 'required',
            'password' 	=> 'required'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'error' 	=> 1,
                'message' 	=> $validator->errors(),
            ]);
        }


		$username 	= $request->input('username');
		$password 	= $request->input('password');

		$url = config('shop.base_url') . config('shop.service_order') . '/Login';

		$response = Http::asForm()->post($url, [
		    'email' 	=> $username,
		    'password' 	=> $password,
		    'apiKey'	=> config('shop.api_key')
		]);

		if ($response->successful()) {

			if ($response['resultCode'] == 0) {

				$user = User::where('username', $username)->first();
				if (!empty($user)) {

					if (!empty($user) && !Hash::check($password, $user->password)) {

						return response(['message' => 'Bad Credentials'], 401);
					}

					$token = $user->createToken("password")->plainTextToken;

					$response = [
						'error' 	=> 0,
						'token'		=> $token,
						'username'	=> $user->username,
						'message' 	=> 'Login Successful'
					];

					return response($response, 200);
				}
			}
		}

        return response()->json([
            'error' 	=> 1,
            'message' 	=> 'Loggin Failed',
        ]);
	}

	public function logout (Request $request) {

		try {

			auth('sanctum')->user()->tokens()->delete();
			return response([ 'error' => 0, 'message' => 'User logged out' ], 200);

		} catch (Exception $ex) {

			return response([ 'error' => 1, 'message' => $ex->getMessage()], 500);
		}

	}

}
