<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Requests\OgrKabulEkleGuncelleRequest;
use TestCase;


class OgrKabulEkleGuncelleRequestTest extends TestCase
{

    public function test_it_should_add_or_update()
    {
        $request = new OgrKabulEkleGuncelleRequest();
        $request->universiteid = $this->id;
        $request->basvuruno = rand(100000, 999999);
        $request->kimlikno = "123456";
        $request->pasaportno = "123456";
        $request->adi = "Test";
        $request->soyadi = "Test";
        $request->cinsiyet = "E";
        $request->babaadi = "Test";
        $request->anneadi = "Test";
        $request->kayityili = "2023";
        $request->kayitdonemi = "1";
        $request->uyrugu = "ZWE";
        $request->dogumtarihi = "01.01.2000";
        $request->dogumyeri = "Test";
        $request->ogrgelisdurum = "0";
        $response = $this->client->execute($request);
        $this->assertTrue($response->isSuccessful());

    }
}
