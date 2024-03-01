<?php

namespace Conkal\YOKAS;

class OgrenciEkleGuncelleRequest extends Request
{
    protected $uri = "api/ogrenci/ogrenciekleguncelle";
    protected $method = "POST";

    public $universiteid = "";
    public $kayityili = "";
    public $kayitdonemi = "";
    public $ogrencino = "";
    public $kimlikno = "";
    public $pasaportno = "";
    /**
     * @var string
     * Uyruk tipi 1,2 veya 3 olmalıdır
     */
    public $uyruk = "";
    public $uyrugu = "";
    public $aktifdonemno = "";
    public $anneadi = "";
    public $ayrilmanedeni = "";
    public $ayrilmatarihi = "";
    public $babaadi = "";
    public $birimid = "";
    public $bolumyili = "";
    public $cinsiyet = "";
    public $diplomaadi = "";
    public $diplomasoyadi = "";
    public $diplomano = "";
    public $diplomanot = "";
    public $diplomatur = "";
    public $dogumtarihi = "";
    public $dogumyeri = "";
    public $genelnotortalama = "";
    public $girispuani = "";
    public $girispuanturu = "";
    public $giristuru = "";
    public $hazirlikdonemsayi = "";
    public $hazirlikokudumu = "";
    public $kangurubu = "";
    public $kayittarihi = "";
    public $kktcadres = "";
    public $notsistemi = "";
    public $ogrhakki = "";
    public $ogrhakkitarih = "";
    public $ogrstatu = "";
    public $sinif = "";
    public $telefonno = "";
    public $email = "";

}