<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Requests\OgrKabulListeRequest;
use TestCase;


class OgrKabulListeRequestTest extends TestCase
{

    public function test_it_should_list_applications()
    {
        $request = new OgrKabulListeRequest();
        $request->SuniversiteId = $this->id;
        $response = $this->client->execute($request);
        $this->assertTrue($response->isSuccessful());
        $this->assertNotEmpty($response->data());
    }

}
