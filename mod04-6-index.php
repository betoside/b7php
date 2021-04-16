<?php
session_start();
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {
    $_SESSION['nome'] = $nome;
    // echo 'Olá, '.$nome.' - <a href="mod04-6-sair.php">SAIR</a>';
    echo "Olá, $nome - <a href='mod04-6-sair.php'>SAIR</a>";
    echo '<br>';
} else {
    $_SESSION['aviso'] = 'Preencha seu NOME corretamente <br><br>';
    header("Location: mod04-6-login.php");
    exit;
}
