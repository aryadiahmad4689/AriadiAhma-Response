<?php

namespace AriadiAhmad\Response;

abstract class Response implements ResponseInterface{

    protected $data;
    protected $code;
    protected $type;
    protected $custom;

    abstract function response();

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setCode($code)
    {
        $this->code =$code;
        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    /**
     * set value with (custom)
     */
    public function setType(string $type="")
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setCustom($custom)
    {
        $this->custom =$custom;
        return $this;
    }

    public function getCustom()
    {
        return $this->custom;
    }

}
