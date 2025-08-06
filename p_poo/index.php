<?php

require_once 'Classes/Produto.php';
require_once 'Classes/GerenciadorProduto.php';

$gerenciador = new GerenciadorProduto();

$gerenciador->adicionarProduto(new Produto(1, 'Notebook', 3500.00, 10));
$gerenciador->adicionarProduto(new Produto(2, 'Mouse', 50.00, 100  ));

echo "Produtos cadastrados:\n";

$gerenciador->listarProdutos();

$gerenciador->atualizarProduto(new Produto(2, 'Mouse Gamer', 99.90, 50));

$produto = $gerenciador->buscarProduto(2);
if ($produto) {
    echo "\nProduto encontrado:\n" . $produto . PHP_EOL;
}

$gerenciador->removerProduto(1);

echo "\nProdutos após remoção:\n";
$gerenciador->listarProdutos();