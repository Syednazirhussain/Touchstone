<?php

namespace App\Http\Controllers\Shop;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{


	public function login (Request $request) {

        $validator = Validator::make($request->all(), [
            'email' 	=> 'required',
            'password' 	=> 'required'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' 	=> 'error',
                'code' 		=> 422,
                'payload' 	=> $validator->errors(),
            ]);
        }

		$email 		= $request->input('email');
		$password 	= $request->input('password');

		$url = config('shop.base_url') . config('shop.service_order') . '/Login';

		$response = Http::asForm()->post($url, [
		    'email' 	=> $email,
		    'password' 	=> $password,
		    'apiKey'	=> config('shop.api_key')
		]);

		return response()->json([
			'status'	=> 'success',
			'code'		=> 200,
			'payload'	=> $response->json()
		]);
	}


}
