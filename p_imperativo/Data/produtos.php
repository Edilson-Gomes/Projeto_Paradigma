<?php

declare(strict_types=1);

$produto = [
    'valor' => null,
    'quantidade' => null,
];

function exibirProduto($array){
    return "\n Valor: " . $array['valor'] . "\n Quantidade: " . $array['quantidade'];
}

