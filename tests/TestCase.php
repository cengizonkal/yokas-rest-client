<?php

class TestCase extends PHPUnit\Framework\TestCase
{
    protected $log;
    public function setUp()
    {
        $this->log = new \Monolog\Logger('debug');
        $this->log->pushHandler(new \Monolog\Handler\StreamHandler('php://stdout', \Monolog\Logger::DEBUG));

    }
}