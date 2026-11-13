<?php
namespace ElegenceIO\Contracts\Sessions;

use SessionHandlerInterface;
interface SessionInterface extends SessionHandlerInterface
{
    public function passConfig(array $config):void;
}