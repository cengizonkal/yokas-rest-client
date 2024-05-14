<?php

namespace Conkal\YOKAS\Requests;

class KabulGetirBasvuruNoRequest extends Request
{
    protected $uri = "api/OgrenciKabulleri/KabulGetirBasvuruNo";
    protected $method = "GET";

    public $SuniversiteId;
    public $SbasvuruNo;
}