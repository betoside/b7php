<?php

require '../mod07/mod07-06-CRUD-config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $usuario = $usuarioDAO->findById($id);
    // se nao achar user pq $id nao existe, entao $usuario === false > location...
} 
if($usuario === false) {
    header("location: index.php");
    exit;
}
?>

<h1>Update User [editar]</h1>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario->getId();?>">

    <label for="">
        Nome: <br>
        <input type="text" name="name" value="<?=$usuario->getNome();?>">
    </label>
    <br><br>
    <label for="">
        Email: <br>
        <input type="email" name="email" value="<?=$usuario->getEmail();?>">
    </label>
    <br><br>
    <input type="submit" value="salvar">
</form>