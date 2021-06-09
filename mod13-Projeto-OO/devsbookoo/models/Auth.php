<?php
require_once 'dao/UserDaoMysql.php';
class Auth {
    // verificar o token do user
    // pode estar armazenado em uma sessao

    // basicamente se o cara tem uma sessao
    // se a sessao tem um token
    // se nao tiver, manda o cara p o login
    // se tiver, vai no banco e verifica o campo token 
    // se o token na sessao pertence a algum user
    // se pertencer, ok, estamos logados com aquele user
    // entao continua o processo senao volta para o login

    private $pdo;
    private $base;
    private $dao;

    public function __construct(PDO $pdo, $base) {
        $this->pdo = $pdo;
        $this->base = $base;
        $this->dao = new UserDaoMysql($this->pdo);
    }

    public function checkToken() {

        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $user = $this->dao->findByToken($token);
            if ($user) {
                return $user;
            }
        }

        header("Location: ".$this->base."/login.php");
        exit;

    }

    public function validateLogin($email, $password) {

        $user = $this->dao->findByEmail($email);
        // echo "<pre>";
        // print_r($user);
        // exit;

        if ($user) {
            
            if(password_verify($password, $user->password)) {
                $token = md5(time().rand(0, 9999));

                $_SESSION['token'] = $token;
                $user->token = $token;
                $this->dao->update($user);

                return true;
            }
        }

        return false; // o padrao é sempre false
    }

    public function emailExists($email) {
        
        // if ($this->dao->findByEmail($email)) {
        //     return true;
        // } else {
        //     return false;
        // }
        return $this->dao->findByEmail($email) ? true : false;
    }

    public function registerUser($name, $email, $password, $birthdate) {

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0, 9999));

        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = $hash;
        $newUser->birthdate = $birthdate;
        $newUser->token = $token;

        $this->dao->insert($newUser);

        $_SESSION['token'] = $token;

        // echo "TOKEN: " . $_SESSION['token'];
        // exit;

    }
}