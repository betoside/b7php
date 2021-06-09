<?php
require 'config.php';
require 'models/Auth.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($email && $password) {

    // echo $email . "<br>";
    // echo $password;
    // exit;

    $auth = new Auth($pdo, $base);
    // print_r($auth);
    // exit;

    if ($auth->validateLogin($email, $password)) {
        // echo "passou : validateLogin";
        // exit;

        header("Location: ".$base);
        exit;
    }

}

$_SESSION['flash'] = "E-mail e ou Senha errados 2";
header("Location: ".$base."/login.php");
exit;