<?php
require 'mod07-06-CRUD-config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="mod07-06-CRUD-create.php">Adicionar usuário</a>

<table style="border-colapse: colapse; width:100%;" border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($lista as $usuario): ?>
    <tr>
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <a href="mod07-06-CRUD-update.php?id=<?=$usuario['id'];?>">[editar]</a>
            <a href="mod07-06-CRUD-delete.php?id=<?=$usuario['id'];?>" onclick="return confirm('Confirma DELETE');">[excluir]</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="mod07-05-Conectando-bd-com-PDO.php">home modulo 07 (mod07-05-Conectando-bd-com-PDO.php)</a>
