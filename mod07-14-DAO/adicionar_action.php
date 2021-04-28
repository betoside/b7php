<?php
require '../mod07/mod07-06-CRUD-config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {

    if ($usuarioDAO->findByEmail($email) === false) { // NAO EXISTE O EMAIL -> ADD
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);

        $usuarioDAO->add( $novoUsuario );

        header("location: index.php");
        exit;
    } else {
        header("location: adicionar.php");
        exit;
    }
} else {
    header("location: adicionar.php");
    exit;
}
