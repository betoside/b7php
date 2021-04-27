<?php
echo 'mod06-12-Polimorfismo.php';
echo "<br>";
echo "<br>";

interface Forma {
    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma {
    private $largura;
    private $altura;

    public function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getTipo()
    {
        return 'quadrado';
    }
    public function getArea()
    {
        return $this->largura * $this->altura;
    }
}

class Circulo {
    private $raio;

    public function __construct($r)
    {
        $this->raio = $r;
    }

    public function getTipo()
    {
        return 'circulo';
    }

    public function getArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
    
}

$quadrado = new Quadrado(5,5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "AREA ".$tipo." : ".$area."<br>";
}

/*
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