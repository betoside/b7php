<?php
require 'mod07-06-CRUD-config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    
    // MODO VULNERAVEL A ATAQUES
    // $pdo->query("INSERT INTO usuarios (nome, email) VALUES ('$name', '$email')");

    // PDO STATEMENT
    // SELECT * FROM `usuarios` WHERE `email` LIKE 'betoside@gmail.com'
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email LIKE :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {

        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        // $sql->bindParam(':email', $email);
        $sql->execute();

        header("location: mod07-06-CRUD-read.php");
        exit;
    
    } else {

        header("location: mod07-06-CRUD-create.php");
        exit;

    }

} else {

    header("location: mod07-06-CRUD-create.php");
    exit;

}

?>