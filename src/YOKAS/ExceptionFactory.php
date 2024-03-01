<?php

namespace Conkal\YOKAS;

use Conkal\YOKAS\Exceptions\AktifStatuKoduTanimliDegil;
use Conkal\YOKAS\Exceptions\BirimSistemeKayitliDegil;
use Conkal\YOKAS\Exceptions\OgrenciEklemedeHataOlustu;
use Exception;

class ExceptionFactory
{
    public static function check($data)
    {
        $data = json_decode($data);
        if ($data->Success) {
            return;
        }
        $errorCode = explode("-", $data->Message)[0];
        switch ($errorCode) {
            case '904':
                throw new AktifStatuKoduTanimliDegil($data->Message);
            case '901':
                throw new BirimSistemeKayitliDegil($data->Message);
            case'900':
                throw new OgrenciEklemedeHataOlustu($data->Message);
            default:
                throw new Exception($data->Message);
        }
    }

}