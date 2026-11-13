<?php
namespace ElegenceIO\Contracts\Database;

interface Drivers
{
    public function __constructor(array $config);
    public function make();
    public function reset();
}