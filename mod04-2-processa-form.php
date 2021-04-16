<?php
session_start();
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

// $sobrenome = "corrrrrr";
// filter_var($sobrenome, );

/*
// aceita se a informacao for correta
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL

// vai limpar a string que vier, proteger de tags e comandos
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_STRING
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_FLOAT
*/ 

if ($nome && $idade && email) {

    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    echo 'NOME: '.$nome;
    echo '<br>';
    echo 'IDADE: '.$idade;
    echo '<br>';
    echo 'EMAIL: '.$email;
} else {
    // echo 'NOME: em branco';
    $_SESSION['aviso'] = 'Preencha os itens corretamente';
    header("location: mod04-2-Pegando-informacoes-do-formulario.php");
    exit;
}
