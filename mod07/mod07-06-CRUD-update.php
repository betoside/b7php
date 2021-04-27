<?php
require 'mod07-06-CRUD-config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        
        // $info = $sql->fetchAll( PDO::FETCH_ASSOC );
        // $info[0]['nome'];
        
        $info = $sql->fetch( PDO::FETCH_ASSOC );
        // $info['id'];
        // $info['nome'];
        // $info['email'];

    } else {
        header("location: mod07-06-CRUD-read.php");
        exit;
    }
    

} else {
    header("location: mod07-06-CRUD-read.php");
    exit;
}
?>

<h1>Update User [editar]</h1>

<form method="POST" action="mod07-06-CRUD-update-action.php">
    <input type="hidden" name="id" value="<?=$id;?>">

    <label for="">
        Nome: <br>
        <input type="text" name="name" value="<?=$info['nome'];?>">
    </label>
    <br><br>
    <label for="">
        Email: <br>
        <input type="email" name="email" value="<?=$info['email'];?>">
    </label>
    <br><br>
    <input type="submit" value="salvar">
</form>