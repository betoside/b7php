<?php

$db_name = 'b7web_usuarios';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", "$db_user", "$db_pass");

// $sql = $pdo->query('SELECT * FROM usuarios');
// $dados = $sql->fetchAll( PDO::FETCH_ASSOC );
// echo "TOTAL ROWS: ".$sql->rowCount();
// echo "<pre>";
// print_r($dados);
// echo "</pre>";

?>
