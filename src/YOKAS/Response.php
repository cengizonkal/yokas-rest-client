<?php

namespace Conkal\YOKAS;

class Response
{
    private $Success;
    private $Message;

    private $data;

    public function __construct($data)
    {
        $this->data = json_decode($data);
        $this->Success = $this->data->Success;
        $this->Message = $this->data->Message;
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


}