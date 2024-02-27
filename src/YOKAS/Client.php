<?php

namespace Conkal\YOKAS;

class Client
{

    protected $host;
    protected $password;
    protected $username;
    private $client;

    public function __construct($host, $username, $password)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->host,
            'auth' => [$this->username, $this->password]
        ]);
    }

    public function execute(Request $request)
    {
        //execute the request and create a response object based upon the response
        $data = $this->client->request($request->method(), $request->url(), [
            'form_params' => $request->data()
        ]);

        $responseClass = $request->response($data->getBody());



    }


}