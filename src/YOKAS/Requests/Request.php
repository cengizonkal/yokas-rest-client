<?php

namespace Conkal\YOKAS\Requests;

abstract class Request
{

    /**
     * Class name of the response object
     */
    protected $response;
    protected $uri;
    protected $method;

    public function response($data)
    {
        return new $this->response($data);
    }

    public function uri()
    {
        return $this->uri;
    }

    public function method()
    {
        return $this->method;
    }


    public function data()
    {
        return $this->toArray();
    }

    public function json()
    {
        return json_encode($this->data());
    }

    protected function toArray()
    {
        $array = [];
        foreach ($this as $key => $value) {
            if (!in_array($key, ['method', 'uri'])) {
                $array[$key] = $value;
            }
        }
        return $array;
    }


}