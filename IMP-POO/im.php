<?php
$produtos = [];

function adicionarProduto($nome, $preco) {
    global $produtos;
    $produtos[] = ['nome' => $nome, 'preco' => $preco];
}

function listarProdutos() {
    global $produtos;
    foreach ($produtos as $i => $p) {
        echo "[$i] {$p['nome']} - R$ {$p['preco']}\n";
    }
}

// Testando
// adicionarProduto("Mouse", 49.90);
// adicionarProduto("Teclado", 89.99);
// listarProdutos();
?>
