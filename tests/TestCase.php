<?php

use Conkal\YOKAS\Client;

class TestCase extends PHPUnit\Framework\TestCase
{


    public $client;
    public $id;

    public function setUp()
    {
        $host = getenv('YOKAS_REST_URL');
        $username = getenv('YOKAS_USERNAME');
        $password = getenv('YOKAS_PASSWORD');
        $this->id = getenv('YOKAS_ID');

        $this->client = new Client($host, $username, $password, $this->id);
    }


}