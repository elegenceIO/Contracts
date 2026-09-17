<?php
namespace ElegenceIO\Contracts\Authentication;

interface Auth
{
    public static function user():string;
    public static function check():bool;
    public static function id():int;
}