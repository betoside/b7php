<?php

require 'mod07-06-CRUD-config.php';

$id = filter_input(INPUT_GET, 'id');

// echo '$id: ' . $id ."<br>";

if ($id) {

    // echo 'IF > $id: ' . $id;

    // "DELETE FROM `usuarios` WHERE `usuarios`.`id` = 6"
    $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

}

header("location: mod07-06-CRUD-read.php");
exit;

?>