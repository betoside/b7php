<?php
$exercicio = "Fazer uma função que vai receber uma string com uma data no formato international Y-m-d, manda para uma funcao que vai retornar o dia da semana em portugues. .php?d=";

echo $exercicio;
echo "<br>---<br>";

$data = htmlspecialchars($_GET["d"]);
if ($data == '') {
    $data = '2020-9-14 6:00:00';
}

echo date('D, d/m/Y H:m', strtotime($data));

// http://localhost:8888/B7Web-PHP/mod03-15-Exercicio-Pratico.php?d=


// echo "<br>---<br>";
// echo "<hr>";
/*
template: mod03-01-nome-aula
mod03-01-Introducao-Funcoes.php
mod03-02-Definindo-função.php
mod03-03-Param-Definicao-normal.php
mod03-04-Param-Type-Valor.php
mod03-05-Param-Referencia-Valor.php
mod03-06-Func-Anonimas.php
mod03-07-Func-Arrow.php
mod03-08-Func-Recursivas.php
mod03-09-Func-Nativas-Matematica.php
mod03-10-Func-Nativas-String-1-2.php
mod03-11-Func-Nativas-String-2-2.php
mod03-12-Func-Nativas-Array-1-2.php
mod03-13-Func-Nativas-Array-2-2.php
mod03-14-Func-Nativas-Data-Hora.php
mod03-15-Exercicio-Pratico.php
mod03-16-Trabalhando-multiplos-arquivos.php
mod03-17-Trabalhando-pastas-diferentes.php
*/ 