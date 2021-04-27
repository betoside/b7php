<?php
echo "mod06-06-Encapsulamento.php";
echo "<br>";
echo "<br>";

// ENCAPSULAR = proteger os objetos ou modificacoes desnecessarias ou que vao 
// prejudicar o funcionamento do objeto
// "vou criar o setter e o getter

class Post {
    public int $id;
    public int $likes = 0;
    public $comments = [];
    private $author;

    public function aumentarLike() {
        $this->likes++;
    }

    public function setAuthor($n) {
        if (strlen($n) >= 3) {
            $this->author = ucfirst($n);
        }
    }

     public function getAuthor() {
        return $this->author ?? 'Visitante';
    }

}

$post1 = new Post();
// $post1->setAuthor('Betao');

$post2 = new Post();
$post2->setAuthor('Side');

echo "POST 1: Autor - ".$post1->getAuthor()."<br>";
echo "POST 2: Autor - ".$post2->getAuthor()."<br>";

/*
mod06-06-Encapsulamento.php

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