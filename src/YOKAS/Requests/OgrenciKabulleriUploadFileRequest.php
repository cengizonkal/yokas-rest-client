<?php

namespace Conkal\YOKAS\Requests;

class OgrenciKabulleriUploadFileRequest extends Request
{

    protected $uri = 'api/OgrenciKabulleri/UploadFile';
    protected $method = 'POST';
    public $sUniversiteid;
    public $sBasvuruNo;
    public $sKimlikNo;
    public $sPasaportNo;


}