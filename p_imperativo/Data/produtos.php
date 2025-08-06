<?php

declare(strict_types=1);

$produtos = [];

function adicionarProduto(&$produtos, int $id, string $nome, float $preco, int $quantidade): void {
    $produtos[$id] = [
        'id' => $id,
        'nome' => $nome,
        'preco' => $preco,
        'quantidade' => $quantidade
    ];
}

function listarProdutos(array $produtos): void {
    foreach ($produtos as $produto) {
        echo "ID: {$produto['id']}, Nome: {$produto['nome']}, Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . ", Quantidade: {$produto['quantidade']}" . PHP_EOL;
    }
}

function buscarProduto(array $produtos, int $id): ?array {
    return $produtos[$id] ?? null;
}

function atualizarProduto(array &$produtos, int $id, string $nome, float $preco, int $quantidade): bool {
    if (isset($produtos[$id])) {
        $produtos[$id]['nome'] = $nome;
        $produtos[$id]['preco'] = $preco;
        $produtos[$id]['quantidade'] = $quantidade;
        return true;
    }
    return false;
}

function removerProduto(array &$produtos, int $id): bool {
    if (isset($produtos[$id])) {
        unset($produtos[$id]);
        return true;
    }
    return false;
}

