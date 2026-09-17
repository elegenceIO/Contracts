<?php
namespace ElegenceIO\Contracts\Bootstrap;

use ElegenceIO\Bootstrap\Processing\Configurator;
use ElegenceIO\Containers\Container;

interface BootstrapKernel
{
public function __construct(Container $container,object $configs,mixed $request);
public function boot():Container;
}