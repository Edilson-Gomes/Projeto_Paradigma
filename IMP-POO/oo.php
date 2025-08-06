<?php
class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class GerenciadorDeProdutos {
    private $lista = [];

    public function adicionar(Produto $p) {
        $this->lista[] = $p;
    }

    public function listar() {
        foreach ($this->lista as $i => $p) {
            echo "[$i] {$p->nome} - R$ {$p->preco}\n";
        }
    }
}

// Testando
// $mouse = new Produto("Mouse", 49.90);
// $teclado = new Produto("Teclado", 89.99);

// $gerenciador = new GerenciadorDeProdutos();
// $gerenciador->adicionar($mouse);
// $gerenciador->adicionar($teclado);
// $gerenciador->listar();
?>
