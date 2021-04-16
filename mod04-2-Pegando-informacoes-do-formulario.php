<?php
session_start();
require_once('mod03-16-header.php');
if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<form method="GET" action="mod04-2-processa-form.php">
    <label for="">
        Nome:
        <br>
        <input type="text" name="nome">
    </label>
    <br><br>
    <label for="">
        Idade:
        <br>
        <input type="text" name="idade">
    </label>
    <br><br>
    <label for="">
        Email:
        <br>
        <input type="text" name="email">
    </label>
    <br><br>
    <button>Enviar</button>
</form>

<?
/*
mod04-3-Validando-informacoes-do-formulario.php
mod04-4-Sessoes-no-PHP.php
mod04-5-Cookies-no-PHP.php
    só tem como setar um cookie antes de exibir qq coisa na tela.
    mod04-5-Cookies-apagar.php

mod04-6-Exercicio-Pratico-Formularios.php
    mod04-6-login.php
    mod04-6-index.php
    mod04-6-sair.php
    fazer pg login c form, prencher nome
    fazer pg index exibir "Olá NOME" - SAIR
    Nao deixar acessar pg login se nao existir a sessao nome

mod04-7-Lendo-arquivos.php
mod04-8-Escrevendo-em-arquivos.php
mod04-9-Exercicio-Pratico-(Cadastro-com-txt).php
mod04-10-Excluindo-arquivos.php
mod04-11-Movendo-arquivos.php
mod04-12-Upload-de-arquivos-(1/2).php
mod04-13-Upload-de-arquivos-(2/2).php
*/ 
?>
