<?php

namespace Conkal\YOKAS\Requests;

class UniversiteBirimlerRequest extends Request
{
    protected $uri = 'api/Ogrenci/UniversiteBirimler';
    protected $method = "GET";
    public $sUniversiteId = "";


}