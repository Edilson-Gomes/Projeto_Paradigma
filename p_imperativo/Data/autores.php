<?php

declare(strict_types=1);

# importando arquivos
require_once 'pessoas.php';

# formulando modelos de autor
$autor = $pessoa;
$autor = [
    'livros_publicados' => null,
];

function exibirAutor($array){
    return exibirPessoa($array) . "\n Livros: " . $array['livros_publicados'];
}

