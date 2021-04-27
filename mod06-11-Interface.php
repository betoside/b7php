<?php
echo 'mod06-11-Interface.php';
echo "<br>";
echo "<br>";

// interface basicamente ela eh um guia de implementacao de uma classe
// como assim?
// qdo vc cria uma class vc esta criando algo abstrato, um modelo
// para ser utiliado quando vc instanciar um objeto
// a interface é um nivel acima disso
// se vc acha que a class eh algo abstrato, 
// a interface é o abstrato do abstrato
// vamos ver um exemplo
// ela so tem um uso especifico que eh o exemplo dessa aula
interface Database {
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB implements Database {
    public function listarProdutos() {
        
    }
    public function adicionarProduto() {
        echo "Adicionando com mysql";
    }
    public function alterarProduto() {
        
    }
}
class OracleDB implements Database {
    public function listarProdutos() {
        
    }
    public function adicionarProduto() {
        echo "Adicionando com Oracle";
    }
    public function alterarProduto() {
        
    }
}
class NodeDB implements Database {
    public function listarProdutos() {
        
    }
    // public function adicionarProduto() {
    //     echo "Adicionando com NODE => MONGO";
    // }
    public function alterarProduto() {
        
    }
}

$db = new MysqlDB();
// $db = new OracleDB();
// $db = new NodeDB(); // da erro
$db->adicionarProduto();


/*
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