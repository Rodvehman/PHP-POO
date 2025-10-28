<?php
require_once "src/Cliente.php";

// Criando um objeto e usando o método construtor para passar os dados
$clienteA = new Cliente("Mônica", 18, "monica@gmail.com","(11) 5666-5666");
$clienteB = new Cliente("José", 15, "jose@gmail.com");

// Neste objeto, passamos inclusive o telefone (que nos anteriores, foi opcional)
$clienteC = new Cliente("Joãozinho", 40, "joaozinho@gmail.com", "11-2135-0300");

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
    <h3>Visualizando a estrutura dos objetos</h3>

    <div>
        <h2>Nome: <?=$clienteA->getNome()?></h2>
        <p>Idade: <?=$clienteA->getIdade()?> anos</p>
        <p>E-mail: <?=$clienteA->getEmail()?></p>
    <p>Telefone: <?=$clienteA->getTelefone()?? "não informado"?></p>
    </div>

    
    
</body>

</html>