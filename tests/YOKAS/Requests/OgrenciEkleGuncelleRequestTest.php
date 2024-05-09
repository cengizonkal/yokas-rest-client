<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Requests\OgrenciEkleGuncelleRequest;
use TestCase;


class OgrenciEkleGuncelleRequestTest extends TestCase
{

    public function test_ogrenci_ekle()
    {

        $request = new OgrenciEkleGuncelleRequest();
        $request->universiteid= $this->id;
        $request->kayityili = "2023-24";
        $request->kayitdonemi = "3";
        $request->ogrencino = "22990000";
        $request->kimlikno = "215045";
        $request->pasaportno = "215045";
        $request->uyruk = "1";
        $request->uyrugu = "XCT";
        $request->aktifdonemno = "1";
        $request->anneadi = "Anneciğim";
        $request->ayrilmanedeni = "";
        $request->ayrilmatarihi = "";
        $request->babaadi = "Baba";
        $request->birimid = "003085";
        $request->bolumyili = "2";
        $request->cinsiyet = "E";
        $request->diplomaadi = "TEST TEST";
        $request->diplomasoyadi = "test";
        $request->diplomano = "";
        $request->diplomanot = "3,67";
        $request->diplomatur = "";
        $request->dogumtarihi = "1999";
        $request->dogumyeri = "Lefkoşa";
        $request->genelnotortalama = "";
        $request->girispuani = "0";
        $request->girispuanturu = "29";
        $request->giristuru = "61";
        $request->hazirlikdonemsayi = "0";
        $request->hazirlikokudumu = "2";
        $request->kangurubu = "";
        $request->kayittarihi = "01.03.2023";
        $request->kktcadres = "Lefkoşa";
        $request->notsistemi = "4";
        $request->ogrhakki = "1";
        $request->ogrhakkitarih = "15.06.2024";
        $request->ogrstatu = "1";
        $request->sinif = "1";
        $request->telefonno = "905335555555";
        $request->email = "22990000@ciu.edu.tr";


        $response = $this->client->execute($request);

        $this->assertTrue($response->isSuccessful());


    }
}
