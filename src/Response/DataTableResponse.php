<?php

namespace AriadiAhmad\Response;

class DataTableResponse extends Response{

    protected $total;

    public function response()
    {
        $data =[
            "recordsTotal" => $this->getTotal(),
            "recordsFiltered" =>$this->getTotal(),
            "data" =>$this->getData(),
        ];

        return json_encode((object)$data);
    }
    public function setTotal(int $totalData)
    {
        $this->total = $totalData;
        return $this;
    }

    public function getTotal()
    {
       return $this->total;
    }
}
