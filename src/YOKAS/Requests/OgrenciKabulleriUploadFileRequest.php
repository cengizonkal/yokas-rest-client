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


    public function body(): array
    {
        return [
            'headers' => $this->headers(),
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => file_get_contents($this->file()->path()),
                    'filename' => $this->file()->name()
                ]
            ],
            'query' => $this->parameters()
        ];
    }
}