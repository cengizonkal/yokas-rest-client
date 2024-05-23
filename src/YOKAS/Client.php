<?php

namespace Conkal\YOKAS;

use Conkal\YOKAS\Exceptions\AktifStatuKoduTanimliDegil;
use Conkal\YOKAS\Exceptions\BirimSistemeKayitliDegil;
use Conkal\YOKAS\Exceptions\OgrenciEklemedeHataOlustu;
use Conkal\YOKAS\Requests\Request;
use GuzzleHttp\Exception\GuzzleException;

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

    /**
     * @throws OgrenciEklemedeHataOlustu
     * @throws GuzzleException
     * @throws BirimSistemeKayitliDegil
     * @throws AktifStatuKoduTanimliDegil
     */
    public function execute(Request $request): Response
    {


        $response = $this->client->request($request->method(), $request->uri(), $request->body());
        ExceptionFactory::check($response->getBody());
        return new Response($response->getBody());
    }


}