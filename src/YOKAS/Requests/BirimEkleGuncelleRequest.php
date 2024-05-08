<?php

namespace Conkal\YOKAS\Requests;

class BirimEkleGuncelleRequest extends Request
{
    protected $uri = 'api/Ogrenci/BirimEkleGuncelle';
    protected $method = "POST";
   
    public $UniversiteId = "";
    public $BirimId = "";
    public $BirimAdi = "";
    public $BirimAdiIngilizce = "";
    public $BirimTuru = "01";
    public $BagliBirim = "";
    public $Durum = "Aktif";
    public $OgrenimDili = "İngilizce";
    public $OgrenimTuru = "NORMAL ÖĞRETİM";
    public $OsymKod = "";
    public $AcilisTarihi = "";
    public $OgrenimSure = "4";


}