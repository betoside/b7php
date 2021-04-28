<?php
$pdo = new PDO("mysql:dbname=b7web_usuarios;host=localhost", "root", "root");
$sql = $pdo->query('SELECT * FROM usuarios');
$dados = $sql->fetchAll( PDO::FETCH_ASSOC );
echo "TOTAL ROWS: ".$sql->rowCount();
echo "<pre>";
print_r($dados);
echo "</pre>";
?>

<h1>Módulo 7: Banco de Dados, CRUD, DAO, SOLID</h1>

<ol>
    <li>mod07-01-Intro-Banco-de-dados.php</li>
    <li>mod07-02-PHPMyAdmin-1-3.php</li>
    <li>mod07-03-PHPMyAdmin-2-3.php</li>
    <li>mod07-04-PHPMyAdmin-3-3.php</li>
    <li>mod07-05-Conectando-bd-com-PDO.php</li>
    <li>
        <h3><a href="mod07-05-Conectando-bd-com-PDO.php">mod07-06-CRUD.php</a></h3>
        <ul>
            <li><a href="mod07-06-CRUD-config.php">mod07-06-CRUD-config.php</a></li>
            <li><a href="mod07-06-CRUD-read.php">mod07-06-CRUD-read.php</a></li>
            <li><a href="mod07-06-CRUD-create.php">mod07-06-CRUD-create.php</a></li>
            <li><a href="mod07-06-CRUD-create-action.php">mod07-06-CRUD-create-action.php</a></li>
            <li><a href="mod07-06-CRUD-update.php">mod07-06-CRUD-update.php</a></li>
            <li><a href="mod07-06-CRUD-update-action.php">mod07-06-CRUD-update-action.php</a></li>
            <li><a href="mod07-06-CRUD-delete.php">mod07-06-CRUD-delete.php</a></li>
        </ul>
    </li>
    <li>mod07-07-Create-Inserindo-1-2.php</li>
    <li>mod07-08-Create-Inserindo-2-2.php</li>
    <li>mod07-09-Read.php</li>
    <li>mod07-10-Update-1-2.php</li>
    <li>mod07-11-Update-2-2.php</li>
    <li>mod07-12-Delete.php</li>
    <li>mod07-13-Obs-sobre-CRUD.php</li>
    
    <li><a href="../mod07-14-Conceito-Data-Access-Object.php">mod07-14-Conceito-Data-Access-Object.php</a></li>
    <li>
        <a href="../mod07-14-DAO/index.php">
        mod07-15-Criando-DAO-1-5.php (../mod07-14-DAO/index.php)
        </a>
    </li>
    <li>mod07-16-Criando-DAO-2-5.php</li>
    <li>mod07-17-Criando-DAO-3-5.php</li>
    <li>mod07-18-Criando-DAO-4-5.php</li>
    <li>mod07-19-Criando-DAO-5-5.php</li>

    <li>
        <a href="../mod07-20-Conceito-SOLID.php">
            mod07-20-Conceito-SOLID.php
        </a>
    </li>
    <li>
        <a href="../mod07-21-SOLID-S-Princ-Respons-Unica.php">
            mod07-21-SOLID-S-Princ-Respons-Unica.php
        </a>
    </li>
    <li>
        <a href="../mod07-22-SOLID-O-Princ-Aberto-Fechado.php">
            mod07-22-SOLID-O-Princ-Aberto-Fechado.php
        </a>
    </li>
    <li>
        <a href="../mod07-23-SOLID-L-Princ-da-Substituicao-de-Liskov.php">
            mod07-23-SOLID-L-Princ-da-Substituicao-de-Liskov.php
        </a>
    </li>
    <li>
        <a href="../mod07-24-SOLID-I-Princ-da-Segregacao-da-Interface.php">
            mod07-24-SOLID-I-Princ-da-Segregacao-da-Interface.php
        </a>
    </li>
    <li>
        <a href="../mod07-25-SOLID-D-Princ-da-Inversão-da-Dependencia.php">
            mod07-25-SOLID-D-Princ-da-Inversão-da-Dependencia.php
        </a>
    </li>
    
    <li>
        <a href="../mod07-26-Encriptacao-de-senhas.php">
            mod07-26-Encriptacao-de-senhas.php
        </a>
    </li>
    <li>
        <a href="../mod07-27-imagens-GD/index.php">
            mod07-27-Manipulacao-de-imagens-com-GD.php
        </a>
    
        <!-- 
        mod07-27-Manipulacao-de-imagens-com-GD.php

        mod07-27-Manipulacao-de-imagens-com-GD.php

        mod07-27-imagens-GD

        #27: Manipulação de imagens com GD

         -->

    </li>
    <li>
        <a href="../mod07-27-imagens-GD/mod07-28-GD-Resize.php">
            mod07-28-GD-Resize.php
        </a>
    </li>
    <li>
        <a href="../mod07-27-imagens-GD/mod07-29-GD-Crop.php">
            mod07-29-GD-Crop.php
        </a>
    </li>
    <li>mod07-30-Classe-DateTime.php</li>
</ol>