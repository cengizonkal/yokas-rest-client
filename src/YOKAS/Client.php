<?php

namespace Conkal\YOKAS;

class Client
{

    protected $host;
    protected $password;
    protected $username;
    private $client;
    private $id;

    public function __construct($host, $username, $password, $id)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->id = $id;
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->host,
            'auth' => [$this->id, $this->password]
        ]);
    }
    public function execute(Request $request)
    {
        $data = $this->client->request($request->method(), $request->uri(), [
            'json' => $request->data()
        ]);
        ExceptionFactory::check($data->getBody());
        return new Response($data->getBody());
    }


}