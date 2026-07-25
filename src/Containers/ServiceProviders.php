<?php
namespace ElegenceIO\Contracts\Containers;
use ElegenceIO\Foundation\Containers\Container;


interface Service#Providers
{
    public function register(Container $c):void;
    public function dependsOn():array;
    public function boot(Container $c):void;
}