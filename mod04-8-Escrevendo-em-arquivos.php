<?php
$texto = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    [verse 1]
    Wild angels fall
    To catch their breath
    I see them fall
    (Watch the simpletons
    Wearing black and white [?])
    You’re lying low
    In your hideout
    He’s calling out
    <a href="mod04-8-Escrevendo-em-arquivos.php">Voltar</a>
    <a href="mod04-8-escrevendo.php">Escrever no arquivo</a>
    </pre>
</body>
</html>
';

file_put_contents('mod04-8-new.html', $texto);
echo "Arquivo Criado com sucesso.";
echo "<br>";
echo "<a href='mod04-8-new.html'>mod04-8-new.html</a>";


/*
mod04-8-Escrevendo-em-arquivos.php
    mod04-8-new.html
    mod04-8-escrevendo.php

mod04-9-Exercicio.php
mod04-10-Excluindo-arquivos.php
mod04-11-Movendo-arquivos.php
mod04-12-Upload-de-arquivos-(1/2).php
mod04-13-Upload-de-arquivos-(2/2).php
*/ 
