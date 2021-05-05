<?php
require 'config.php';

$tarefa = filter_input(INPUT_POST, 'tarefa');

if ($tarefa) {

    $sql = "INSERT INTO tarefas (titulo) VALUES (:titulo)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':titulo', $tarefa);
    $sql->execute();
}

header("Location: ./");
exit;