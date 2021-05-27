## Ini Adalah Library Untuk Perusahaan Dcc Consultant.com
- Cara install 
``composer require ariadiahmad/response-dcc-consultan``
- Cara penggunaan
- Jika Success
 <Enter>
  
 ``use AriadiAhmad\Response\ApiResponse;``

``$response = new ApiResponse();``
  
 <Enter>
  
 - Tidak Ada Data
 <Enter>
  
``$response = $response->setCode(200)->setMessage("Success Tambah Data")->setStatus(true)->response();``
 <Enter>
   
  - Ada Data
 <Enter>
   
``$response = $response->setCode(200)->setData($data)->setMessage("Success Tambah Data")->setStatus(true)->response();``
 
  
- jika Gagal
<Enter>
  
``use AriadiAhmad\Response\ApiResponse;``

``$response = new ApiResponse();``
``$response = $response->setCode(404)->setMessage("Gagal Melihat Data")->setStatus(false)->response();``
  
  ***
  
  ### Disarankan
  - Laravel
  - Php 7.2
