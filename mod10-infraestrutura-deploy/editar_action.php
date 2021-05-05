<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$tarefa = filter_input(INPUT_POST, 'tarefa');

if ($id && $tarefa) {

    $sql = $pdo->prepare("SELECT * FROM tarefas WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {

        $sql = $pdo->prepare("UPDATE tarefas SET titulo = :titulo WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':titulo', $tarefa);
        $sql->execute();
    }
} 

header("location: index.php");
exit;