<?php
echo "mod06-07-Metodo-Estatico.php";
echo "<br>";
echo "<br>";

// é um método que vc vai fazer dentro da sua classe e que ele é "independente"
// ele pode ser usado unicamente externamente

class Matematica {
    
    public static string $nome = 'Betao';
    
    public static function somar($x,$y) {
        return $x + $y;
    }

}

// $m = new Matematica();
// echo $m->somar(1,2);


// after STATIC
// nao precisa instanciar a classe em um obj
echo Matematica::somar(20,30);
echo '<hr>';
echo Matematica::$nome;

/*
mod06-07-Metodo-Estatico.php

mod06-08-Exercicio.php
mod06-09-Entendendo-Heranca.php
mod06-10-Private-e-Protected.php
mod06-11-Interface.php
mod06-12-Polimorfismo.php
mod06-13-Namespace.php
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