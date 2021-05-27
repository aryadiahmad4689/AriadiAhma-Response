<?php
require_once __DIR__.'/vendor/autoload.php';

use AriadiAhmad\Response\ApiResponse;
use PHPUnit\Framework\TestCase;

class TestApiResponse extends TestCase
{

   public function testApiSuccesNoData()
   {     $response = new ApiResponse();
         $response = $response->setCode(200)->setMessage("successTambahData")->setStatus(true)->response();
         $data = json_decode($response);
         $this->assertArrayHasKey('message', (array)$data->diagnostic);
         $this->assertEquals(["successTambahData"], (array)$data->diagnostic->message);
         $this->assertEquals([200], (array)$data->diagnostic->code);
   }

   public function testApiSuccesWithData()
   {     $response = new ApiResponse();
         $data =[
            "name" => "Ariadi Ahmad",
            "job" => "Programmer"
         ];
         $response = $response->setCode(200)->setData($data)->setMessage("success")->setStatus(true)->response();
         $data = json_decode($response);
         $this->assertArrayHasKey('message', (array)$data->diagnostic);
         $this->assertArrayHasKey('name', (array)$data->diagnostic->response);
         $this->assertEquals(["success"], (array)$data->diagnostic->message);
         $this->assertEquals(["Ariadi Ahmad"], (array)$data->diagnostic->response->name);
         $this->assertEquals([200], (array)$data->diagnostic->code);
   }

   public function testApiNotSuccess()
   {     $response = new ApiResponse();
         $response = $response->setCode(400)->setMessage("gagal")->setStatus(false)->response();
         $data = json_decode($response);
         $this->assertArrayHasKey('message', (array)$data->diagnostic);
         $this->assertEquals(["gagal"], (array)$data->diagnostic->message);
         $this->assertEquals([400], (array)$data->diagnostic->code);
   }
   
}
