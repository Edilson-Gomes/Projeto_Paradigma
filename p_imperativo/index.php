<?php

declare(strict_types=1);

require_once 'Data/produtos.php';



adicionarProduto($produtos, 1, 'Notebook', 3500.00, 10);
adicionarProduto($produtos, 2, 'Mouse', 50.00, 100);

echo "Produtos cadastrados:\n";
listarProdutos($produtos);

atualizarProduto($produtos, 2, 'Mouse Gamer', 99.90, 50);

$produto = buscarProduto($produtos, 2);
if ($produto) {
    echo "\nProduto encontrado:\n";
    echo "ID: {$produto['id']}, Nome: {$produto['nome']}, Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . ", Quantidade: {$produto['quantidade']}" . PHP_EOL;
}

removerProduto($produtos, 1);

echo "\nProdutos após remoção:\n";
listarProdutos($produtos);
