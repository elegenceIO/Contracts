<?php
namespace ElegenceIO\Contracts\Console;

interface Commands
{
    public function requiredFlags():array;
}