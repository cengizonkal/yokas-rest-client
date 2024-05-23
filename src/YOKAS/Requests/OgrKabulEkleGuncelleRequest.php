<?php

namespace Conkal\YOKAS\Requests;

class OgrKabulEkleGuncelleRequest extends Request
{
    protected $uri = 'api/OgrenciKabulleri/ogrkabulekleguncelle';
    protected $method = "POST";
    public $universiteid;
    public $basvuruno;
    public $kimlikno;
    public $pasaportno;
    public $adi;
    public $soyadi;
    public $cinsiyet;
    public $babaadi;
    public $anneadi;
    public $kayityili;
    public $kayitdonemi;
    public $uyrugu;
    public $dogumtarihi;
    public $dogumyeri;
    public $ogrgelisdurum="0";


    public function body(): array
    {
        return [
            'headers' => $this->headers(),
            'json' => $this->parameters()
        ];

    }
}