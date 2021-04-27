<?php
echo 'mod06-14-Injecao-Dependencia.php';
echo "<br>";
echo "<br>";

// o que é:
// R: é qdo vc insere uma class dentro de outra, normal//e através do contrutor mas nao necessar//e
// como fazer
// como aplicar 
// etc
interface MatematicaBasica {
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica {
    public function somar($x, $y)
    {
        return $x + $y;
    }
}
class Basico2 implements MatematicaBasica {
    public function somar($x, $y)
    {
        $res = $x;
        for ($q=0; $q < $y; $q++) { 
            $res++;
        }
        return $res;
    }
}

class Basico3 implements MatematicaBasica {
    public function somar($x, $y){
        // return $x+$y;
        return 100;
    }
}

class Matematica {
    private $basico;

    public function __construct(MatematicaBasica $b)
    {
        // $this->basico = new Basico1;
        // $this->basico = new Basico2;
        $this->basico = $b;
    }

    public function somar($x, $y)
    {
        return $this->basico->somar($x, $y);
    }
}

// $mat = new Matematica();
// $basico = new Basico1();
// $basico = new Basico2(); // isso é injecao de dependencia. é inserir um objeto de fora para dentro da classe
$mat = new Matematica(new Basico3()); // usando sem instanciar o Basico1
// $mat = new Matematica($basico);
echo $mat->somar(33, 33);

// //////////////////////////////////
// usando com banco de dados para atender qq tipo de banco de dados for usar no futuro
// OBS: 

// class Database {
//     private $engine;

//     public function __construct(DatabaseInterface $eng)
//     {
//         $this->engine = $eng;
//     }

//     public function listarTudo()
//     {
//         return $this->engine->listar();
//     }
// }

// class MysqlEngine implements DatabaseInterface {
//     public function listar()
//     {
//        return "> MysqlEngine listar tudo.";
//     }
// }
// class OracleEngine implements DatabaseInterface {
//     public function listar()
//     {
//        return "> OracleEngine listar tudo.";
//     }
// }
// class MongoEngine implements DatabaseInterface {
//     public function listar()
//     {
//        return "> MongoEngine listar tudo.";
//     }
// }

// $db = new Database( new MysqlEngine() );
// $db->listarTudo();




/*
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
