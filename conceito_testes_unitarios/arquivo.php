<?php

class Arquivo
{
    private $path;

    public function __construct($path){
        $this->path = $path;
    }

    public function write($content) {
        file_put_contents($this->path, $content. PHP_EOL, FILE_APPEND);
    }


}
