<?php

namespace Conkal\YOKAS;

class File
{
    private $path;
    private $name;

    public function __construct($path, $name)
    {
        $this->path = $path;
        $this->name = $name;
    }

    public function path()
    {
        return $this->path;
    }

    public function name()
    {
        return $this->name;
    }


}