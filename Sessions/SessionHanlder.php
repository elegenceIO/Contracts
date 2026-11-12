<?php
namespace ElegenceIO\Contracts\Sessions;

interface SessionHanlder
{
        public function put(string $name,mixed $value):void;
        public function get(string $name):string|bool;

        public function register():void;
        public function has(string $name):bool;
        public function delete(array|string ...$values):void;
        public function forget(string $key): void;
}