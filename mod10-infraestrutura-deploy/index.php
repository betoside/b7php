<style>
    a { font-size: 10px; text-decoration: none; display: inline-block; margin-right: 5px; border: 1px solid #fff; }
    a:hover { border: 1px solid #fff; background-color: yellow; }
    .edit { font-size: 14px; }
</style>

<h1>Lista de tarefas 📋</h1>
<form action="novo.php" method="POST">
    <input type="text" size="50" name="tarefa" placeholder="Nova Tarefa">
    <input type="submit" value="Enviar">
</form>
<?php
require 'config.php';

$sql = "SELECT * FROM tarefas ORDER BY id DESC";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll();
    ?>
    <ul>
        <?php foreach ($lista as $item) : ?>
        <li>
            <a href="excluir.php?id=<?=$item['id'];?>" title="excluir" onclick="return confirm('Tem certeza que deseja excluir?');">❌</a>
            <a class="edit" href="editar.php?id=<?=$item['id'];?>" title="editar">✍🏽</a>
            <?=$item['titulo'];?> <small>[id <?=$item['id'];?>]</small>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php
}