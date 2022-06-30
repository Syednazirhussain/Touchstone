<?php

namespace App\Services;

use App\Services\IService;
use Illuminate\Support\Facades\Http;

class OfficeAPIService implements IService
{

	private $base_url = null;

    public function __construct() {

    	$this->base_url = config('shop.base_url') . config('shop.service_order');
    }

    public function sendPostRequest ($urlPrefix, $body = []) {

    	$this->base_url .= "/".$urlPrefix;
    	$body['apiKey'] = config('shop.api_key');
    	
    	return Http::asForm()->post($this->base_url, $body);
    }


}