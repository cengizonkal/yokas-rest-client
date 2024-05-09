<?php

namespace YOKAS\Requests;

use Conkal\YOKAS\Requests\OgrenciNoBilgiRequest;
use TestCase;

class OgrenciNoBilgiRequestTest extends TestCase
{

    public function test_it_should_get_student_info()
    {
        $request = new OgrenciNoBilgiRequest();
        $request->SogrenciNo = '21706071';
        $request->SuniversiteId = $this->id;
        $response = $this->client->execute($request);
        $this->assertTrue($response->isSuccessful());
        //assertNotEmpty($response->data());
        $this->assertNotEmpty($response->data());
    }

    public function test_it_should_throw_error_if_student_is_not_found()
    {
        $request = new OgrenciNoBilgiRequest();
        $request->SogrenciNo = '99999999';
        $request->SuniversiteId = $this->id;
        $this->expectException(\Exception::class);
        $this->client->execute($request);


    }
}
