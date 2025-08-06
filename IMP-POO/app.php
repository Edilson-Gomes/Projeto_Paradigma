<?php

require_once 'im.php';
require_once 'oo.php';

// Sistema Imperativo
echo "\nSistema Procedural\n";

adicionarProduto("Smartphone", 849.90);
adicionarProduto("powerbank", 79.90);
listarProdutos();

// Sistema POO
echo "\nSistema POO\n";

$smartphone = new Produto("smartphone", 849.90);
$powerbank = new Produto("powerbank", 89.90);

$gerenciador = new GerenciadorDeProdutos();
$gerenciador->adicionar($smartphone);
$gerenciador->adicionar($powerbank);
$gerenciador->listar();