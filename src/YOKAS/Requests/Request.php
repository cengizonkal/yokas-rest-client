<?php

namespace Conkal\YOKAS\Requests;

use Conkal\YOKAS\File;

abstract class Request
{


    protected $uri;
    protected $method;

    private $file = null;

    protected $headers = [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ];

    public function file()
    {
        return $this->file;
    }

    public function setFile($path, $name)
    {
        $this->file = new File($path, $name);
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
        return $this->parameters();
    }

    public abstract function body(): array;


    public function json()
    {
        return json_encode($this->data());
    }

    protected function parameters(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if (!in_array($key, ['method', 'uri', 'file', 'body'])) {
                $array[$key] = $value;
            }
        }
        return $array;
    }

    public function hasFile()
    {
        return $this->file != null;
    }

    public function headers()
    {
        return $this->headers;
    }


}