<?php
require_once __DIR__.'/vendor/autoload.php';

use AriadiAhmad\Response\DataTableResponse;
use PHPUnit\Framework\TestCase;

class TestDataTableResponse extends TestCase
{

   public function testApiSuccesNoData()
   {     $response = new DataTableResponse();
         $data =[
            "name" => "Ariadi Ahmad",
            "job" => "Programmer"
         ];
         $response = $response->setTotal(1)->setData($data)->response();
         $data = json_decode($response);
         $this->assertEquals([1], (array)$data->recordsTotal);
         $this->assertEquals(["Ariadi Ahmad"], (array)$data->data->name);
         $this->assertEquals(["Programmer"], (array)$data->data->job);
   }
}
