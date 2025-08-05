<?php

declare(strict_types=1);


class Autor extends Pessoa {
    
    private ?int $livrosPublicados;


    public function __construct($nome, $cpf, $livrosPublicados = null){     
        parent::__construct($nome, $cpf);   
        $this->livrosPublicados = $livrosPublicados;
    }


    public function getLivrosPublicados(){
        return $this->livrosPublicados;
    }

    public function setLivrosPublicados(float $livrosPublicados){
        $this->livrosPublicados = $livrosPublicados;
    }

    public function getNome(){
        $this->nome;
    }

  
    

}