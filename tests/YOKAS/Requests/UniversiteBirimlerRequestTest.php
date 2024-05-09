<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Requests\UniversiteBirimlerRequest;
use TestCase;

class UniversiteBirimlerRequestTest extends TestCase
{
    public function test_it_should_list_university_units()
    {
        $request = new UniversiteBirimlerRequest();
        $request->sUniversiteId = $this->id;
        $response = $this->client->execute($request);
        $this->assertTrue($response->isSuccessful());
        //assertNotEmpty($response->data());
        $this->assertNotEmpty($response->data());
    }
}
