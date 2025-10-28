<?php
// Importando a classe Cliente
require_once "src/Cliente.php";

// Criando objetos (ou instâncias) à partir da Classe
$clienteA = new Cliente();
$clienteB = new Cliente();

// Atribuindo valores ao objeto $clienteA
$clienteA->nome = "Mônica";
$clienteA->idade = 25;
$clienteA->email = "monica@gmail.com";

$clienteB->nome = "Jon";
$clienteB->idade = 15;
$clienteB->email = "jon@gmail.com";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>

<body>
    <h1>Exemplos de PHP com POO</h1>
    <hr>
    <h2>Trabalhando com classes e objetos</h2>

    <h3>Acessando/lendo os dados dos objetos</h3>

    <!-- Segunda versão (acessando através de um método) -->
     
    <?=$clienteA->mostrarDados()?>
    
    <?=$clienteB->mostrarDados()?>





    <!-- Primeira versão (acessando direto) -->
    <hr>

    <h4>Cliente A</h4>
    <ul>
        <li>Nome: <?= $clienteA->nome ?> </li>
        <li>Idade: <?= $clienteA->idade ?> anos </li>
        <li>E-mail: <?= $clienteA->email ?> </li>
    </ul>

    <!-- Faça os dados do clienteB aparecerem
    dentro de uma section. Use h4, parágrafo, negrito etc. -->
    <section>
        <h4>Cliente B</h4>
        <ul>
            <li>Nome: <?= $clienteB->nome ?> </li>
            <li>Idade: <?= $clienteB->idade ?> anos </li>
            <li>E-mail: <?= $clienteB->email ?> </li>
        </ul>
    </section>

    <hr>
    <h3>Visualizando a estrutura dos objetos</h3>
    <pre><?= var_dump($clienteA, $clienteB) ?></pre>
</body>

</html>