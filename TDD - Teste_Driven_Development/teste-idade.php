<?php

require_once 'Pessoa.php';
require_once 'Validator.php';

$pessoa = new Pessoa('Daniel', new DateTimeImmutable('2002-04-23'));

$validator = new Validator();

$valid = $validator->validTrue($pessoa);

if ($valid === true) {
    echo "TESTE OK" . PHP_EOL;
} else {
    echo "TESTE FALHOU" . PHP_EOL;
}


