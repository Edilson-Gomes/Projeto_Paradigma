<?php

declare(strict_types=1);

require 'Produto.php';
require 'Autor.php';


class Livro extends Produto {
    
    private ?string $titulo;
    private ?string $descricao;
    private ?Autor $autor;


    public function __construct($valor, $quantidade, $titulo = null, $descricao = null){    
        parent::__construct($valor, $quantidade);       
        $this->titulo = $titulo;
        $this->descricao = $descricao;   
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo(float $titulo){
        $this->titulo = $titulo;
    }

    public function getNomeAutor(){
        $this->autor->getNome();
    }

    public function getQuantidadeLivros(){
        $this->quantidade;
    }


}