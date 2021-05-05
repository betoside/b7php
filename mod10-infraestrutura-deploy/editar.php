<?php
require 'config.php';

$tarefa = false;
$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $sql = $pdo->prepare("SELECT * FROM tarefas WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {

        $tarefa = $sql->fetch(PDO::FETCH_ASSOC);

    }
}
if($tarefa === false) {
    header("location: index.php");
    exit;
}
?>

<h1>Atualiza tarefa ✍🏽</h1>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$tarefa['id'];?>">
    <input type="text" name="tarefa" size="50" value="<?=$tarefa['titulo'];?>">
    <input type="submit" value="Salvar">
</form>