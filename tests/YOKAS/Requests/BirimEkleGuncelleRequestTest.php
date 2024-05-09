<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Constants\BirimTuru;
use Conkal\YOKAS\Constants\OgrenimTurleri;
use Conkal\YOKAS\Requests\BirimEkleGuncelleRequest;
use TestCase;

class BirimEkleGuncelleRequestTest extends TestCase
{

    public function test_it_should_add_new_unit()
    {
        $request = new BirimEkleGuncelleRequest();
        $request->UniversiteId = $this->id;
        $request->BirimId = "999999";
        $request->BirimAdi = "Test Birimi";
        $request->BirimAdiIngilizce = "Test Unit";
        $request->BirimTuru = BirimTuru::LISANS;
        $request->BagliBirim = "";
        $request->Durum = "Aktif";
        $request->OgrenimDili = "İngilizce";
        $request->OgrenimTuru = OgrenimTurleri::BIRINCI_OGRETIM;
        $request->OsymKod = "";
        $request->AcilisTarihi = "";
        $request->OgrenimSure = "4";
        $response = $this->client->execute($request);
        $this->assertTrue($response->isSuccessful());
        $this->assertNotEmpty($response->data());
    }
}
