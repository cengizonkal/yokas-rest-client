<?php

namespace YOKAS;

use Conkal\YOKAS\Client;
use Conkal\YOKAS\OgrenciEkleGuncelleRequest;
use TestCase;


class ClientTest extends TestCase
{


    public function test_ogrenci_ekle()
    {
        $host = getenv('YOKAS_REST_URL');
        $username = getenv('YOKAS_USERNAME');
        $password = getenv('YOKAS_PASSWORD');
        $id = getenv('YOKAS_ID');

        $client = new Client($host, $username, $password, $id);
        $request = new OgrenciEkleGuncelleRequest();
        $request->universiteid= $id;
        $request->kayityili = "2024";
        $request->kayitdonemi = "Güz";
        $request->ogrencino = "22990000";
        $request->kimlikno = "215045";
        $request->pasaportno = "215045";
        $request->uyruk = "1";
        $request->uyrugu = "XCT";
        $request->aktifdonemno = "";
        $request->anneadi = "Anne";
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
        $request->dogumtarihi = "28.09.1999";
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

        $response = $client->execute($request);

        //print message
        $this->log->info($response->message());

        $this->assertTrue($response->isSuccessful());



    }
}
