<?php

namespace App\Services;

interface IService {

	function sendPostRequest($urlPrefix, $body = []);
}