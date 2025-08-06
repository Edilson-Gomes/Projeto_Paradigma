<?php

declare(strict_types=1);

class Produto {

    private int $id;

    private string $nome;

    private ?float $valor;
    private ?int $quantidade;

    public function __construct(int $id, string $nome, ?float $valor = null, ?int $quantidade = null){        
        $this->id = $id;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;   
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getValor(): ?float {
        return $this->valor;
    }

    public function getQuantidade(): ?int {
        return $this->quantidade;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setValor(?float $valor): void {
        $this->valor = $valor;
    }

    public function setQuantidade(?int $quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function __toString(): string {
        return "ID: {$this->id}, Nome: {$this->nome}, Valor: {$this->valor}, Quantidade: {$this->quantidade}";
    }

    public function __serialize(): array {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'valor' => $this->valor,
            'quantidade' => $this->quantidade
        ];
    }

    public function __unserialize(array $data): void {
        $this->id = $data['id'];
        $this->nome = $data['nome'];
        $this->valor = $data['valor'];
        $this->quantidade = $data['quantidade'];
    }

}