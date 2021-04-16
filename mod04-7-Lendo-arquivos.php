<?php
$texto = file_get_contents('mod04-7-texto.txt');
$texto = explode("\n", $texto);
// echo "LINHAS: ".count($texto)."<br>";
// print_r($texto);
array_map(function($linha){
    echo $linha."<br>";
}, $texto);

/*
mod04-7-Lendo-arquivos.php
    mod04-7-texto.txt
    
mod04-8-Escrevendo-em-arquivos.php
mod04-9-Exercicio-Pratico-(Cadastro-com-txt).php
mod04-10-Excluindo-arquivos.php
mod04-11-Movendo-arquivos.php
mod04-12-Upload-de-arquivos-(1/2).php
mod04-13-Upload-de-arquivos-(2/2).php
*/ 
