<?php
namespace ElegenceIO\Contracts\FileSystem;

interface Cache
{
    // Open the File Structure
    public function open(string $path):string;
    // Add Data 
    public function add(string $name,array|string $data):void;
    // Removwe data from array set
    public function remove(string $name):void;
    // Retrive all data add name for single return;
    public function retreive(?string $name):array|string;
}