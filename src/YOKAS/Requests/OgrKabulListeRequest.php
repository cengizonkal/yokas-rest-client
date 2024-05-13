<?php

namespace Conkal\YOKAS\Requests;

class OgrKabulListeRequest extends Request
{
    public $SuniversiteId;
    protected $uri = 'api/OgrenciKabulleri/ogrkabulListe';
    protected $method = 'GET';


}