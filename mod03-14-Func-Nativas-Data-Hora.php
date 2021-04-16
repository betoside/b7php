<?php
// echo time();
echo date('d/m/Y H:i:s');
echo "<br>---<br>";
echo date('D, d, F, y');
echo "<br>---<br>";
$data = date('Y-m-d');
echo 'formato padrão internacional: '.$data;
echo "<br>---<br>";
$data = '2021-11-04';
echo date('D, d/m/Y', strtotime($data));
echo "<br>---<br>";

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