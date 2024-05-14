<?php

namespace Conkal\YOKAS\Requests;

use Conkal\YOKAS\File;

abstract class Request
{

    /**
     * Class name of the response object
     */
    protected $response;
    protected $uri;
    protected $method;

    private $file = null;

    public function file()
    {
        return $this->file;
    }

    public function setFile(File $file)
    {
        $this->file = $file;
    }


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

    public function hasFile()
    {
        return $this->file != null;
    }


}