<?php
namespace ElegenceIO\Contracts\Orm\Database;

interface Drivers
{
    public function __constructor(array $config);
    public function make();
    public function reset();
}