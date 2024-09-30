<?php

namespace Conkal\YOKAS;
use ArrayAccess;

class Response
{
    public $success;
    public $message;
    public $data;

    public function __construct($data)
    {
        $data = json_decode($data);
        $this->success = $data->Success;
        $this->message = $data->Message;
        $this->data = $data;

    }

    public function isSuccessful()
    {
        return $this->success;
    }

    public function message()
    {
        return $this->message;
    }

    public function data()
    {
        return $this->data->Data;
    }

    public function __get($name)
    {
        if (is_object($this->data->Data)) {
            if (property_exists($this->data->Data, $name)) {
                return $this->data->Data->$name;
            }
        }
        return null;
    }


}