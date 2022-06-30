<?php

namespace App\Http\Controllers\Shop;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{

	public function index () {

		$url = config('shop.base_url') . config('shop.service_order') . '/GetProducts';
		$response = Http::get($url);

		return response()->json([
			'status'	=> 'success',
			'code'		=> 200,
			'payload'	=> $response->json()
		]);
	}

}
