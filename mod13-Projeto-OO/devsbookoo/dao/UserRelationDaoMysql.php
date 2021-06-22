<?php
require_once "models/UserRelation.php";

class UserRelationDaoMysql implements UserRelationDAO {
    private $pdo;

    public function __construct(PDO $driver) {
        $this->pdo = $driver;
    }

    public function insert(UserRelation $u) {
        // echo "INSERT";
        // echo "<pre>";
        // print_r($u);
        // echo "</pre>";
        // exit;

        // $sql = $this->pdo->prepare("INSERT INTO users (
        //     email, password, name, birthdate, token
        // ) VALUES (
        //     :email, :password, :name, :birthdate, :token
        // )");

        // $sql->bindValue(':email', $u->email);
        // $sql->bindValue(':password', $u->password);
        // $sql->bindValue(':name', $u->name);
        // $sql->bindValue(':birthdate', $u->birthdate);
        // $sql->bindValue(':token', $u->token);
        // $sql->execute();

        // return true;
    }
 
    public function getFollowing($id) {
        $users = [];

        $sql = $this->pdo->prepare("SELECT user_to FROM userrelations 
        WHERE user_from = :user_from");

        $sql->bindValue(':user_from', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
            foreach($data as $item){
                $users[''] = $item['user_to'];
            }

        }

        return $users;

    }
    
    public function getFollowers($id) {
        $users = [];

        $sql = $this->pdo->prepare("SELECT user_from FROM userrelations 
        WHERE user_to = :user_to");

        $sql->bindValue(':user_to', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
            foreach($data as $item){
                $users[''] = $item['user_from'];
            }

        }

        return $users;

    }
    
}