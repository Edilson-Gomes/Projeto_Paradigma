<?php

declare(strict_types=1);

require_once 'produtos.php';
require_once 'pessoas.php';

$livro = $produto;
$livro = [
    'titulo' => null,
    'descricao' => null,
    'autor' => null,
];

function exibirLivro($array){
    return "\n Titulo: " . $array['titulo'] . 
    "\n Descrição: " . $array['descricao'] . 
    "\n Autor: " . $array['autor']['nome'] . 
    "\n" . exibirProduto($array);
}
