<?php

class Validator
{

    public function validTrue(Pessoa $pessoa): bool
    {
        return $pessoa->idade() >= 18;
    }
}
