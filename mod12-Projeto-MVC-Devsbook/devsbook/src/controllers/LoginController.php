<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class LoginController extends Controller {

    public function signin() {
        // echo "login";
        // return;
        $flash = '';
        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('signin', [
            'flash' => $flash
        ]);
    }

    public function signinAction() {
        // $this->render('login');
        echo "login recebido";
        // return;
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if ($email && $password) {
            
            // validar email e password, usar um handler
            $token = UserHandler::verifyLogin($email, $password);
            if ($token) {
                $_SESSION['token'] = $token;
               $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem.';
               $this->redirect('/login');
            }

        } else {
            //  msg especifica
            $_SESSION['flash'] = 'Digite os campos de e-mail e/ou senha.';
            $this->redirect('/login');
        }
        
    }


    public function signup() {
        // echo "cadastro";

        $flash = '';
        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('signup', [
            'flash' => $flash
        ]);
    }


    public function signupAction() {
        echo "login recebido" . "<br>";
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        $birthdate = filter_input(INPUT_POST, 'birthdate');

        if ($name && $email && $password && $birthdate) {
        // if ($birthdate) {
            // recebendo neste formato brasileiro: dd/mm/aa
            $birthdate = explode('/', $birthdate);
            // echo "<pre>";
            // print_r($birthdate);
            // echo count($birthdate);
            // return;

            if (count($birthdate) != 3) {
                $_SESSION['flash'] = 'Data de nascimento inválida.';
                $this->redirect('/cadastro');
            }

            $birthdate = $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0];
            if (strtotime($birthdate) === false) {
                $_SESSION['flash'] = 'Data de nascimento inválida.';
                $this->redirect('/cadastro');
            }


            if (UserHandler::emailExists($email) === false) {
                // echo $name ." - ". $email ." - ". $password ." - ". $birthdate;
                // return;
                $token = UserHandler::addUser($name, $email, $password, $birthdate);
                $_SESSION['token'] = $token;

                // echo $token;
                // return;

                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'Email já cadastrado';
                $this->redirect('/cadastro');
            }

        } else {
            $this->redirect('/cadastro');
        }

    }
    
    public function logout () {
        $_SESSION['token'] = '';
        $this->redirect('/login');
    }

    

}