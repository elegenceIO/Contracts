<?php
namespace ElegenceIO\Contracts\Exceptions;

use Throwable;

interface ExceptionListenerInterface
{
    public function support(Throwable $e):bool;
    public function handle(Throwable $e):void;
}