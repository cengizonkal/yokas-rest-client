<?php

namespace Conkal\YOKAS\Requests;

class OgrenciNoBilgiRequest extends Request
{

    protected $uri = 'api/Ogrenci/OgrenciNoBilgi';
    protected $method = 'GET';
    public $SogrenciNo = "";
    public $SuniversiteId;


    public function body(): array
    {
        return [
            'headers' => $this->headers(),
            'query' => $this->parameters()
        ];
    }
}