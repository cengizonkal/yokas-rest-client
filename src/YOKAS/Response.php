<?php

namespace Conkal\YOKAS;

class Response
{
    private $Success;
    private $Message;

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


}