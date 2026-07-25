<?php
namespace ElegenceIO\Contracts\Bootstrap;

interface RegisterInterface
{
    public function validate(array $data):void;
}