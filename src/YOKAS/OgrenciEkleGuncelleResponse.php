<?php

namespace Conkal\YOKAS;

class OgrenciEkleGuncelleResponse
{
    public $Suceess;
    public $Message;

    public function __construct($data)
    {
        $data = json_decode($data);
        $this->Suceess = $data->Suceess;
        $this->Message = $data->Message;
    }

}