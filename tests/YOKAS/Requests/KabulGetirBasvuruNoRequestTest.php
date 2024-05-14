<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Requests\KabulGetirBasvuruNoRequest;
use TestCase;


class KabulGetirBasvuruNoRequestTest extends TestCase
{

    public function test_it_should_return_json_data()
    {
        $request = new KabulGetirBasvuruNoRequest();
        $request->SuniversiteId = $this->id;
        $request->SbasvuruNo = 1;
        $response = $this->client->execute($request);
        $this->assertTrue($response->isSuccessful());
    }
}
