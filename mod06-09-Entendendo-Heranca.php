<?php
echo 'mod06-09-Entendendo-Heranca.php';
echo "<br>";
echo "<br>";

class Post {
    private int $id;
    private int $likes = 0;

    public function setId($i) {
        $this->id = $i;
    }
    public function getId() {
        return $this->id;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }
    public function getLikes() {
        return $this->likes;
    }
}
class Foto extends Post {
    private $url;

    public function __construct($id) {
        $this->setId($id);
    }

    public function setUrl($u) {
        $this->url = $u;
    }
    public function getUrl() {
        return $this->url;
    }
}
class Texto extends Post {
    private $body;
}

$foto = new Foto(5);
$foto->setLikes(22);
$foto->setUrl('WWW.inteligencia-profissional.com');

echo "FOTO: ";
echo "<br>";
echo "- id: ".$foto->getId();
echo "<br>";
echo "- likes: ".$foto->getLikes();
echo "<br>";
echo "- URL: ".$foto->getUrl();
echo "<br>";

/*
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