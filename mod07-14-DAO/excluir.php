<?php

require '../mod07/mod07-06-CRUD-config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $usuarioDAO->delete($id);
}

header("location: index.php");
exit;

?>