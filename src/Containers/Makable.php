<?php
namespace ElegenceIO\Contracts\Containers;

use Psr\Container\ContainerInterface;

interface Makable extends ContainerInterface
{
    public function make(string $abstract, mixed $callback = null);
}