<?php

require_once 'Classes/Produto.php';
require_once 'Classes/Livro.php';


$produto = new Produto();
$produto->setValor(1.5);
$produto->setQuantidade(10);

echo "Produto: " . $produto->getValor();


// $livro = new Livro('Teste da Silva', 'Lorem ipsum');



// echo "Temos " . $livro->getQuantidadeLivros() . " do livro" . $livro->getTitulo();

