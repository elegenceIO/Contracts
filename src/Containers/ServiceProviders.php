<?php
namespace ElegenceIO\Contracts\Containers;
use ElegenceIO\Containers\Container;


interface ServiceProviders
{
    public function register(Container $c):void;
    public function dependsOn():array;
    public function boot(Container $c):void;
}