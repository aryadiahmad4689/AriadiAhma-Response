<?php

namespace AriadiAhmad\Response;

class ApiResponse extends Response
{

    protected $status;
    protected $message;
    protected $pageData;

    public function setStatus(bool $status)
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setPage($data)
    {
        $this->pageData = $data;
        return $this;
    }

    public function getPage()
    {
        return $this->pageData;
    }

    public function setMessage(String $message)
    {
        $this->message = $message;
        return $this;
    }

    public function response()
    {
        if ($this->getCode() == 200) {

            if ($this->getData() != null) {

                if ($this->getPage() != null) {

                    return $this->successResponseWithTotal();
                }

                return $this->successResponseWithData();
            }

            return $this->successResponseNoData();
        } else {
            return $this->errorResponse();
        }
    }

    public function errorResponse()
    {
        $data['diagnostic'] =
            [
                'code' => $this->getCode(),
                'status' => $this->getStatus(),
                'message' => $this->getMessage(),
            ];

        http_response_code($this->getCode());
        return json_encode((object)$data);

    }

    public function successResponseWithTotal()
    {
        $data['diagnostic'] =
            [
                'code' => $this->getCode(),
                'status' => $this->getStatus(),
                "message" => $this->getMessage(),
                'total_item' => $this->getPage(),
                'response' => $this->getData()
            ];

        http_response_code($this->getCode());
        return json_encode((object)$data);

    }

    public function successResponseWithData()
    {
        $data['diagnostic'] =
            [
                'code' => $this->getCode(),
                'status' => $this->getStatus(),
                "message" => $this->getMessage(),
                'response' => $this->getData()
            ];
        
        http_response_code($this->getCode());
        return json_encode((object)$data);
    }

    public function successResponseNoData()
    {
        $data['diagnostic'] =
            [
                'code' => $this->getCode(),
                'status' => $this->getStatus(),
                "message" => $this->getMessage(),
            ];
        http_response_code($this->getCode());
        return json_encode((object)$data);
    }
}
