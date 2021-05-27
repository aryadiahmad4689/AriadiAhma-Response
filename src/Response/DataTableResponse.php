<?php

namespace AriadiAhmad\Response;

class DataTableResponse extends Response{

    protected $total;

    public function response()
    {
        return response()->json([
            "recordsTotal" => $this->getTotal(),
            "recordsFiltered" =>$this->getTotal(),
            "data" =>$this->getData(),
        ]);
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
