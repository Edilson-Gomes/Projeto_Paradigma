<?php

declare(strict_types=1);

# arquivos importados
require_once 'Data\autores.php';
require_once 'Data\livros.php';

# criando autores
$autor['nome'] = 'J.J.Tolkien';
$autor['cpf'] = '111.222.333-44';
$autor['livros_publicados'] = 3;

# criando livro
$livro['titulo'] = 'O hobbit';
$livro['descricao'] = 'Uma jornada inesperada';
$livro['autor'] = $autor;
$livro['valor'] = 1.5;
$livro['quantidade'] = 10;

# metodos instanciados
print_r(exibirAutor($autor));
print_r(exibirLivro($livro));

print_r($livro);