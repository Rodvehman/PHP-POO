<?php
require_once "src/Livro.php";

$livroUm = new Livro("Senhor dos Anéis", "Tolkien", 2000);
$livroDois = new Livro("Hobbit", "Tolkien");
$livroTres = new Livro("Harry Potter", "Rowling", 1000);
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
    <hr>

    <div>
        <h2><?=$livroUm->getTitulo()?></h2>

        <?=$livroUm->verificarTitulo($livroUm->getTitulo())?>
        
        <!-- Aqui, usamos uma condicional if/else para mostrar
         parágrafos diferentes de acordo com a condição. -->
        <?php if($livroUm->getPaginas()): ?>
            <!-- Se tem páginas, mostramos isso: -->
            <p><b>Quantidade de páginas: <?=$livroUm->getPaginas()?></b></p>
        <?php else: ?>
            <!-- Se não tem, mostramos isso: -->
            <p style="color: red;"><b>Não foram informadas as páginas</b></p>
        <?php endif; ?>

    </div>

    <hr>

    <details open>
        <summary><?=$livroDois->getTitulo()?></summary>
        <p>
            <b>Quantidade de páginas: 
                <!-- Tem páginas? Mostra as páginas.
                 Não tem? Mostra o "não informado" (como se um fosse um if) -->
                <?=$livroDois->paginas ?? "não informado" ?>
            </b>
        </p>
    </details>

    <hr>

    <ol>
        <li><?=$livroTres->titulo?></li>
        <li><?=$livroTres->paginas?> páginas</li>
    </ol>

    <hr>

    <p>Título do livro: <?=$livroQuatro->titulo?></p>
    <p>Autor: <?=$livroQuatro->autor?></p>
    
    <!-- Usamos um if para, se houver páginas (ou seja, não for null),
     faremos aparecer o parágrafo com o dado. -->
    <?php if( $livroQuatro->paginas ): ?>
    <p>Páginas: <?=$livroQuatro->paginas?></p>
    <?php endif; ?>

    <?php
        $livroCinco->getTitulo();
    ?>
</body>
</html>