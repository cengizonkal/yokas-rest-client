# YOKAS REST Client
This is a PHP client for the YOKAS REST API.

## Requirements

- PHP 7.0 or higher

## Installation

```bash
composer require conkal/yokas-rest-client
```

## Usage

```php
use Conkal\YOKAS\Client;
$client = new Client("host", "username", "password", "yokasid);

//create a request
$request = new OgrKabulEkleGuncelleRequest();

//set request parameters
$request->universiteid = $client->id;
$request->basvuruno = rand(100000, 999999);
$request->kimlikno = "123456";
$request->pasaportno = "123456";
$request->adi = "Test";
$request->soyadi = "Test";
$request->cinsiyet = "E";
$request->babaadi = "Test";
$request->anneadi = "Test";
$request->kayityili = "2023";
$request->kayitdonemi = "1";
$request->uyrugu = "ZWE";
$request->dogumtarihi = "01.01.2000";
$request->dogumyeri = "Test";
$request->ogrgelisdurum = "0";

//execute the request
$response = $this->client->execute($request);

//check if the request was successful
$this->assertTrue($response->isSuccessful());

```


