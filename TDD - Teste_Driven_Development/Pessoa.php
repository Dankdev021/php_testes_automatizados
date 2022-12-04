<?php

class Pessoa
{
    private $name;
    private DateTimeImmutable $dataNascimento;

    public function __construct(
        $name,
        $dataNascimento
    )
    {
        $this->name = $name;
        $this->dataNascimento = $dataNascimento;
    }

    public function nome () {
        return $this->name;
    }

    public function idade () {
        $today = new DateTimeImmutable();
        return $this->dataNascimento->diff($today);

    }

}
