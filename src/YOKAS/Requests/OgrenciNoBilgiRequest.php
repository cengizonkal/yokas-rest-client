<?php

namespace Conkal\YOKAS\Requests;

class OgrenciNoBilgiRequest extends Request
{

    protected $uri = 'api/Ogrenci/OgrenciNoBilgi';
    protected $method = 'GET';
    public $SogrenciNo = "";
    public $SuniversiteId;


}