<?php

namespace AriadiAhmad\Response;

interface ResponseInterface {
    public function response();
    public function getData();
    public function setData($data);
    public function setCode($code);
    public function getCode();
}