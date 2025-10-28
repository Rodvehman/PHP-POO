<?php
require_once "src/Livro.php";

$livroUm = new Livro("Senhor dos Anéis", "Tolkien", 2000);
$livroDois = new Livro("Hobbit", "Tolkien", 2000);
$livroTres = new Livro("Harry Potter","Rowling", 1000);
$livroQuatro = new Livro("ABCD", "Fulano", 100);
$livroCinco = new Livro("O Senhor dos Anéis", "Tolkien", 1500);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de PHP com POO</title>
</head>
<body>
    <h1>Exercícios de PHP com POO</h1>
    <div>
        <h2>Título: <?=$livroCinco->getTitulo()?></h2>
        <h3>Autor: <?=$livroCinco->getAutor()?></h3>
        <h3>Páginas: <?=$livroCinco->getPaginas()?></h3>
    </div>
    <div>
        <h2>Título: <?=$livroDois->getTitulo()?></h2>
        <h3>Autor: <?=$livroDois->getAutor()?></h3>
        <h3>Páginas: <?=$livroDois->getPaginas()?></h3>
    </div>
    <div>
        <h2>Título: <?=$livroUm->getTitulo()?></h2>
        <h3>Autor: <?=$livroUm-getAutor()?></h3>
        <h3>Páginas: <?=$livroUm->getPaginas()?></h3>
    </div>
</body>
</html>