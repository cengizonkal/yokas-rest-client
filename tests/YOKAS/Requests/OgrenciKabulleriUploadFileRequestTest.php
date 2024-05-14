<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Requests\OgrenciKabulleriUploadFileRequest;
use TestCase;


class OgrenciKabulleriUploadFileRequestTest extends TestCase
{

    public function test_it_should_upload_file()
    {
        $request = new OgrenciKabulleriUploadFileRequest();
        $request->sUniversiteid = $this->id;
        $request->sBasvuruNo = 1;
        $request->sKimlikNo = '12345678901';
        $request->sPasaportNo = '12345678901';
        $request->file = __DIR__ . '/../../files/test.pdf';
        $response = $this->client->execute($request);
        $this->assertTrue($response->isSuccessful());
    }
}
