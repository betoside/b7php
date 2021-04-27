<?php
echo "mod06-08-Exercicio.php";
echo "<br>";
echo "<br>";
/* fazer uma classe que é uma calculadora
+ 12
+ 2
- 1
* 3
/ 2
+ 0.5
-----
total = 20
clear()
*/ 
class Calculadora {

    public $subtotal;
    
    public function add($x) {
        $this->subtotal = $this->subtotal + $x;
    }

    public function sub($x) {
        $this->subtotal = $this->subtotal - $x;
    }

    public function multiply($x) {
        $this->subtotal = $this->subtotal * $x;
    }

    public function divide($x) {
        $this->subtotal = $this->subtotal / $x;
    }

    public function total() {
        return $this->subtotal;
    }

    public function clear() {
        $this->subtotal = 0;
    }

}

echo 'oi';
echo '<hr>';
$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);
echo 'TOTAL: '.$calc->total();
$calc->clear();
echo '<hr>';
echo 'TOTAL: '.$calc->total();

/*
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