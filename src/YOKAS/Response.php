<?php

namespace Conkal\YOKAS;

class Response
{
    private $Success;
    private $Message;

    private $data;

    public function __construct($data)
    {
        $data = json_decode($data);
        $this->Success = $data->Success;
        $this->Message = $data->Message;

    }

    public function isSuccessful()
    {
        return $this->Success;
    }

    public function message()
    {
        return $this->Message;
    }

    public function data()
    {
        return $this->data->Data;
    }

    //magic method to get data
    public function __get($name)
    {
        return $this->data->Data->$name;
    }


}