<?php
$voltar = filter_input(INPUT_GET, 'voltar', FILTER_SANITIZE_SPECIAL_CHARS);
$mover = filter_input(INPUT_GET, 'mover', FILTER_SANITIZE_SPECIAL_CHARS);

if ($voltar == '') {
    echo "Nome original do arquivo txt na pasta: <strong>mod04-11-1-teste.txt</strong>";
}
if ($mover == 1) {
    rename('mod04-11-2-teste-renomeado.txt', 'mod04-11-Movendo/mod04-11-1-teste.txt');
    echo 'rename("mod04-11-2-teste-renomeado.txt", "mod04-11-Movendo/mod04-11-1-teste.txt")';
    echo '<br>';
    echo "O arquivo <strong>mod04-11-2-teste-renomeado.txt</strong> foi movido e renomeado</strong>";
    echo '<br>';
    echo '<p><a href="mod04-11-Movendo-arquivos.php?mover=0">Trazer de volta</a></p>';
    echo '<hr>';
} 
if ($mover == 0) {
    rename('mod04-11-Movendo/mod04-11-1-teste.txt', 'mod04-11-1-teste.txt');
    echo 'rename("mod04-11-Movendo/mod04-11-1-teste.txt", "mod04-11-1-teste.txt")';
    echo '<br>';
    echo "O arquivo <strong>mod04-11-Movendo/mod04-11-1-teste.txt</strong> foi movido e renomeado</strong>";
    echo '<br>';
    echo '<p><a href="mod04-11-Movendo-arquivos.php?voltar=0">voltar o nome anterior do txt</a></p>';
    echo '<hr>';
}


if ($voltar) {
    rename('mod04-11-2-teste-renomeado.txt', 'mod04-11-1-teste.txt');
    echo '<p>Arquivo renomeado para o nome original com sucesso.</p>';
    echo '<br>';
    echo '<p>De: "mod04-11-2-teste-renomeado.txt" <br> Para: "mod04-11-1-teste.txt"<p>';
    echo '<br>';
    echo '<p><a href="mod04-11-Movendo-arquivos.php?voltar=0">renomear</a></p>';
    echo '<hr>';
}
if ($voltar == 0) {
    rename('mod04-11-1-teste.txt', 'mod04-11-2-teste-renomeado.txt');
    echo '<p>rename("mod04-11-1-teste.txt", "mod04-11-2-teste-renomeado.txt");<p>';
    echo '<p>Arquivo renomeado com sucesso.</p>';
    echo '<p>De: "mod04-11-1-teste.txt" <br> Para: "mod04-11-2-teste-renomeado.txt"<p>';
    echo '<p><a href="mod04-11-Movendo-arquivos.php?voltar=1">voltar o nome anterior do txt</a></p>';
    echo '<p><a href="mod04-11-Movendo-arquivos.php?mover=1">mover o arquivo para uma pasta</a></p>';
}




/*
mod04-11-Movendo-arquivos.php
mod04-11-1-teste.txt
mod04-11-2-teste-renomeado.txt
mod04-11-Movendo
    mod04-11-3-teste-renomeado.txt

mod04-12-Upload-de-arquivos-(1/2).php
mod04-13-Upload-de-arquivos-(2/2).php
*/ 
