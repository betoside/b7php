<?php

require '../mod07/mod07-06-CRUD-config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {

    // echo "<br>";
    // echo $id;
    // echo "<br>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // exit;

    $usuario = $usuarioDAO->findById($id); // recomendado
    // $usuario = new Usuario(); // alternativa // nao gera uma consulta a mais
    // $usuario->setId($id); // alternativa
    $usuario->setNome($name);
    $usuario->setEmail($email);

    $usuarioDAO->update( $usuario );

    header("location: index.php");
    exit;

} else {
    header("location: editar.php?id=".$id);
    exit;
}

?>