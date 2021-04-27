<?php
echo "mod06-05-Metodo-Construtor.php";
echo "<br>";
echo "<br>";

class Post {
    public int $id;
    public int $likes = 0;
    public $comments = [];
    public $author;

    public function __construct($postId) {
        $this->id = $postId;
        // consultar BD pegar info do POST $id
        $this->likes = 12 * $postId;
    }

    public function aumentarLike() {
        echo 'abc';
        $this->likes++;
    }

}

$post1 = new Post(1);
$post1->likes = 33;
// $post1->aumentarLike();
// $post1->aumentarLike();
// $post1->likes = "Betao";

$post2 = new Post(2);
$post2->likes = 25;
// $post2->aumentarLike();

echo "POST 1 - LIKES: ".$post1->likes."<br>";
echo "POST 2 - LIKES: ".$post2->likes."<br>";

/*
mod06-05-Metodo-Construtor.php

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