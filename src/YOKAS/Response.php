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
        $this->data = $data;

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
        //check if the data is an object
        if (is_object($this->data->Data)) {
            //check if the property exists
            if (property_exists($this->data->Data, $name)) {
                return $this->data->Data->$name;
            }
        }
        return null;

    }


}