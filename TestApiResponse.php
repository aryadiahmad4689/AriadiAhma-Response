<?php
require_once __DIR__.'/vendor/autoload.php';

use AriadiAhmad\Response\ApiResponse;

$response = new ApiResponse();
// $data['user']= ['nama'=>"halo","oke"=>'indonesia','makassar'];
$response = $response->setCode(404)->setMessage("Gagal Melihat Data")->setStatus(false)->response();

echo($response);