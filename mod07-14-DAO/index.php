<?php

require '../mod07/mod07-06-CRUD-config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);
$lista = $usuarioDAO->findAll();
// echo "<pre>";
// print_r($lista);
// echo "</pre>";

?>

<a href="adicionar.php">Adicionar usuário</a>

<table style="border-colapse: colapse; width:100%;" border="1" cellpadding="3">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($lista as $user): ?>
    <tr>
        <td><?=$user->getId();?></td>
        <td><?=$user->getNome();?></td>
        <td><?=$user->getEmail();?></td>
        <td style="text-align: center;">
            <a href="editar.php?id=<?=$user->getId();?>">[editar]</a>
            <a href="excluir.php?id=<?=$user->getId();?>" onclick="return confirm('Confirma DELETE');">[excluir]</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="../mod07/mod07-05-Conectando-bd-com-PDO.php">
    home modulo 07
    <cite>(mod07-05-Conectando-bd-com-PDO.php)</cite>
</a>
