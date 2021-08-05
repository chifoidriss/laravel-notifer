<?php

use Mckenziearts\Notifer\LaravelNotifer;
use PHPUnit\Framework\TestCase;

class NotiferTest extends TestCase
{
    protected $session;

    protected $notifer;

    public function setUp(): void
    {
        $this->session = Mockery::spy('Mckenziearts\Notifer\Storage\Session');
        $this->notifer = new LaravelNotifer($this->session);
    }
}
