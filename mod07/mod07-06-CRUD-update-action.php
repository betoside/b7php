<?php
require 'mod07-06-CRUD-config.php';

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

    //                        xxxx atenção com o nome das colunas da tabela
    // UPDATE `usuarios` SET `nome` = 'fulano', `email` = 'fulano@gmail.com' WHERE `usuarios`.`id` = 4;
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("location: mod07-06-CRUD-read.php");
    exit;

} else {

    // adicionar
    header("location: mod07-06-CRUD-create.php");
    exit;

}

?>