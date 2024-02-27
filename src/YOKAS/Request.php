<?php

namespace Conkal\YOKAS;

class Request
{
    protected $method;
    protected $url;
    protected $response;

    public function response($data)
    {
        return new $this->response($data);
    }


    public function method()
    {
        return $this->method;
    }

    public function url()
    {
        return $this->url;
    }

    public function data()
    {
        return $this->toArray();
    }

    protected function toArray()
    {
        $array = [];
        foreach ($this as $key => $value) {
            if (!in_array($key, ['method', 'url', 'response'])) {
                $array[$key] = $value;
            }
        }
        return $array;
    }


}