<?php
session_start();
$base = 'http://localhost:8888/B7Web-PHP/mod13-Projeto-OO/devsbookoo';

$db_name = 'devsbook2';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);