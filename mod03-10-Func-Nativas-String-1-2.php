<?php

$nomeSujo = "             caloi cross       ";
$nomelimpo = trim($nomeSujo);
echo '$nomeSujo: '.$nomeSujo;
echo "<hr>";
echo 'trim($nomeSujo): '.trim($nomeSujo);
echo "<hr>";
echo 'strlen($nomeSujo): '.strlen($nomeSujo);
echo "<hr>";
echo 'strlen($nomelimpo): '.strlen($nomelimpo);

echo "<hr>";
echo 'strtolower($nomelimpo): '.strtolower($nomelimpo);
echo "<hr>";
echo 'strtoupper($nomelimpo): '.strtoupper($nomelimpo);

$nomeAlterado = str_replace('caloi cross', 'monark bmx pantera', $nomelimpo);
echo "<hr>";
echo 'str_replace: '.$nomeAlterado;
echo "<hr>";

$parteDoNome = substr($nomeAlterado, 0, 5);
echo 'substr($nomeAlterado, 0, 5): '.$parteDoNome;
echo "<hr>";
$parteDoNome = substr($nomeAlterado, -7, 6);
echo 'substr($nomeAlterado, -7, 6): '.$parteDoNome;
echo "<hr>";

$posicao = strpos($nomeAlterado, 'b');
echo 'strpos($nomeAlterado, "b"): '.$posicao;
echo "<hr>";
$parteDoNome = substr($nomeAlterado, strpos($nomeAlterado, 'B'), 3);
echo 'substr($nomeAlterado, strpos($nomeAlterado, "B"), 3): '.$parteDoNome;
echo "<hr>";

$posicao = strpos($nomeAlterado, 'Z');
echo 'strpos($nomeAlterado, "Z"): '.$posicao;
echo "<hr>";

$posicao = strpos($nomeAlterado, 'm');
echo 'strpos($nomeAlterado, "m"): '.$posicao;
echo "<hr>";

$Camel = ucfirst($nomeAlterado);
echo 'ucfirst($nomeAlterado): '.$Camel;
echo "<hr>";

$Camel = ucwords($nomeAlterado);
echo 'ucwords($nomeAlterado): '.$Camel;
echo "<hr>";

$explodir = explode(' ', $nomeAlterado);
echo 'explode($nomeAlterado): ';
print_r($explodir);
echo "<hr>";

$numero = 12913.12;
echo 'number_format($$numero, 2, ",", "."): '.number_format($numero, 2, ",", ".");
echo "<hr>";
echo 'number_format($$numero, 2, ",", ""): '.number_format($numero, 2, ",", "");
echo "<hr>";

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
mod03-14-Func-Nativas-Data/Hora.php
mod03-15-Exercicio-Pratico.php
mod03-16-Trabalhando-multiplos-arquivos.php
mod03-17-Trabalhando-pastas-diferentes.php
*/ 