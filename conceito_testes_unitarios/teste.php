<?php

require_once '../php_testes_automatizados/arquivo.php';

$filePath = md5(time());
$escritor = new Arquivo($filePath);

$escritor->write('uma linha');
$escritor->write('outra linha');

$contentExpected =
'uma linha
outra linha
';

if ($contentExpected === file_get_contents($filePath)) {
    echo "TESTE OK" . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}
