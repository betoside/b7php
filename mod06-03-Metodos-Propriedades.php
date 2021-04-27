<?php
echo "mod06-03-Metodos-Propriedades.php";
echo "<br>";
echo "<br>";
/*
classe / objeto
1º criar a possibilidade do obj existir
definir caracteristicas do objeto (na ideia)
depois transforme ele em um objeto mesmo
*/
function somar($x,$y){
    return $x + $y;
}

// criar a class
class Post {

    // definir as caracteristicas
    public $likes = 0;
    public $comments = [];
    public $author;

    // private
    // protected
        // proteger as propriedades de interferências exteriores

    // métodos
        // executar coisas

    public function aumentarLike() {
        $this->likes++;
    }

}

echo "HELLO WORLD <br><br>";
$post1 = new Post();
$post1->likes = 3;
$post1->aumentarLike();
$post1->aumentarLike();

$post2 = new Post();
$post2->likes = 10;
$post2->aumentarLike();

echo "POST 1: ".$post1->likes."<br>";
echo "POST 2: ".$post2->likes."<br>";


/*
mod06-01-Introducao.php
mod06-02-Classes-Objetos.php
mod06-03-Metodos-Propriedades.php

mod06-04-Typed-Properties-74.php
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