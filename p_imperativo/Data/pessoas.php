<?php

declare(strict_types=1);

$pessoa = [
    'nome' => null,
    'cpf' => null,
];

function exibirPessoa($array){
    return "\n Nome: " . $array['nome'] . "\n CPF: " . $array['cpf'];
}
