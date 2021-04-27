<?php
echo 'mod06-13-Namespace.php';
echo "<br>";
echo "<br>";

// criado como uma forma de encapsular 
// classes constantes funcoes etc dentro de um grupo para que 
// se consiga usar classes com o mesmo nome 
// dentro de uma mesma aplicacao

require('mod06-13-Namespace-class1.php');
require('mod06-13-Namespace-class2.php');

$a = new classe1\MinhaClasse();
$b = new classe2\MinhaClasse();
echo $a->testar();
echo "<br>";
echo $b->testar();
echo "<hr>";
// ///////////////////////

require('mod06_13_Namespace_folder/matematica/mod06-13-Namespace-basico.php');
$basico = new mod06_13_Namespace_folder\matematica\Basico();
echo '$basico<br>';
echo $basico->testar();
echo "<hr>";
// ///////////////////////


use mod06_13_Namespace_folder\matematica\Basico as outraMatematica;
echo '$basico2<br>';
$basico2 = new outraMatematica();
echo $basico2->testar();


/*
mod06-13-Namespace.php
    mod06-13-Namespace-class1.php
    mod06-13-Namespace-class2.php
        7' 
        mod06-13-Namespace-folder
            matematica
                mod06-13-Namespace-basico.php

mod06-14-Injecao-Dependencia.php
mod06-15-PSR.php
mod06-16-PSR-1-1.php
mod06-17-PSR-1-2.php
mod06-18-Autoload.php
mod06-19-PSR-4.php
mod06-20-Intro-Ger-Dependencias.php
mod06-21-Composer-0.php
mod06-22-Composer-1.php
mod06-23-Composer-2.php
*/ 