<?php

declare(strict_types=1);


class Produto {
    
    private ?float $valor;
    private ?int $quantidade;

    public function __construct($valor = null, $quantidade = null){        
        $this->valor = $valor;
        $this->quantidade = $quantidade;   
    }


    public function getValor(){
        return $this->valor;
    }

    public function setValor(float $valor){
        $this->valor = $valor;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade){
        $this->quantidade = $quantidade;
    }
    

}