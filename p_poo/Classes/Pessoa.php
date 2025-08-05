<?php

declare(strict_types=1);


class Pessoa {
    
    private ?string $nome;
    private ?string $cpf;

    public function __construct($nome = null, $cpf = null){        
        $this->nome = $nome;
        $this->cpf = $cpf;   
    }


    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }
    

}