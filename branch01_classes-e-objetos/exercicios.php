<?php
require_once "src/Livro.php";

$livroUm = new Livro();
$livroDois = new Livro();
$livroTres = new Livro();

//var_dump($livroUm);

$livroUm->autor = "Fulano de Tal";
$livroUm->titulo = "PHP com Orientação a Objetos";
$livroUm->paginas = 500;

$livroDois->autor = "Beltrano";
$livroDois->titulo = "HTML5";
$livroDois->paginas = 125;

$livroTres->autor = "Zezinho";
$livroTres->paginas = 100;
$livroTres->titulo = "CSS";
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
        <h2><?=$livroUm->titulo?></h2>
        <p><b>Quantidade de páginas: <?=$livroUm->paginas?></b></p>
    </div>

    <hr>

    <details>
        <summary><?=$livroDois->titulo?></summary>
        <p><b>Quantidade de páginas: <?=$livroDois->paginas?></b></p>
    </details>

    <hr>

    <ol>
        <li><?=$livroTres->titulo?></li>
        <li><?=$livroTres->paginas?> páginas</li>
    </ol>

</body>
</html>