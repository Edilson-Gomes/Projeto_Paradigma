<?php
declare(strict_types=1);

class GerenciadorProduto {
    private array $produtos = [];

    public function adicionarProduto(Produto $produto): void {
        $this->produtos[$produto->getId()] = $produto;
    }

    public function removerProduto(int $id): void {
        unset($this->produtos[$id]);
    }

    public function buscarProduto(int $id): ?Produto {
        return $this->produtos[$id] ?? null;
    }

     public function listarProdutos(): void {
        foreach ($this->produtos as $produto) {
            echo $produto . PHP_EOL;
        }
    }

    public function atualizarProduto(Produto $produto): void {
        if (isset($this->produtos[$produto->getId()])) {
            $this->produtos[$produto->getId()] = $produto;
        }
    }

}