<?php
namespace src\handlers;

use \src\models\User;
use \src\models\UserRelation;
use \src\handlers\PostHandler;

class UserHandler {

    public static function checkLogin() {

        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();
            
            // echo "<pre>";
            // echo $data[id];
            // echo "<br>";
            // echo "LA LA LA";
            // echo "<br>";
            // print_r($data);
            // return;

            if (count($data) > 0) {
                
                $loggedUser = new User();

                // pode fazer assim
                // $loggedUser->setId($data['id']);
                // $loggedUser->setEmail($data['email']);
                // $loggedUser->setName($data['name']);

                // ou pode fazer assado
                $loggedUser->id = $data['id'];
                $loggedUser->email = $data['email'];
                $loggedUser->name = $data['name'];
                $loggedUser->avatar = $data['avatar'];

                // echo "<pre>";
                // print_r($loggedUser);
                // return;

                return $loggedUser;
            }

            return false;
        }

        return false;
    }

    public static function verifyLogin($email, $password) {

        // 1º puxar pelo email, pega user e senha, verifica a senha
        $user = User::select()->where('email', $email)->one();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // 2º gerar token
                $token = md5(time().rand(0,9999).time());

                User::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();

                return $token;
            }
        }
        
        return false;

    }

    public static function idExists($id) {
        $user = User::select()->where('id', $id)->one();
        return $user ? true : false;
    }

    public static function getUser($id, $full = false) {
        $data = User::select()->where('id', $id)->one();

        if ($data) {
            $user = new User();
            $user->id = $data['id'];
            $user->email = $data['email'];
            $user->name = $data['name'];
            $user->birthdate = $data['birthdate'];
            $user->city = $data['city'];
            $user->work = $data['work'];
            $user->avatar = $data['avatar'];
            $user->cover = $data['cover'];

            if ($full) {
                $user->followers = [];
                $user->following = [];
                $user->photos = [];

                // followers
                $followers = UserRelation::select()->where('user_to', $id)->get();
                foreach($followers as $follower){
                    $userData = User::select()->where('id', $follower['user_from'])->one();
                    
                    $newUser = new User();
                    $newUser->id = $userData['id'];
                    $newUser->name = $userData['name'];
                    $newUser->avatar = $userData['avatar'];

                    $user->followers[] = $newUser;

                }

                // following
                $following = UserRelation::select()->where('user_from', $id)->get();
                foreach($following as $follower){
                    $userData = User::select()->where('id', $follower['user_to'])->one();
                    
                    $newUser = new User();
                    $newUser->id = $userData['id'];
                    $newUser->name = $userData['name'];
                    $newUser->avatar = $userData['avatar'];

                    $user->following[] = $newUser;

                }


                // photos
                $user->photos = PostHandler::getPhotosFrom($id);
                
            }

            return $user;
        }

        return false;
    }

    public static function  emailExists($email) {
        // echo "emailExists: " . $email . "<br>";
        // return;
        $user = User::select()->where('email', $email)->one();
        return $user ? true : false;
    }
    

    public function addUser($name, $email, $password, $birthdate) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

        User::insert([
            'email' => $email,
            'password' => $hash,
            'name' => $name,
            'birthdate' => $birthdate,
            // 'avatar' => 'default.jpg',
            // 'cover' => 'cover.jpg',
            'token' => $token
        ])->execute();

        return $token;
    }

    public static function isFollowing($from, $to) {
        $data = UserRelation::select()
            ->where('user_from', $from) // eu
            ->where('user_to', $to) // outro user
        ->one();

        if ($data) {
            return true;
        }
        return false;
    }
    
    public static function follow($from, $to) { // nao precisa de retorno, simplesmente faz
        UserRelation::insert([
            'user_from' => $from,
            'user_to' => $to
        ])->execute();
    }

    public static function unfollow($from, $to) { // nao precisa de retorno, simplesmente faz
        UserRelation::delete()
            ->where('user_from', $from)
            ->where('user_to', $to)
        ->execute();
    }

    public static function searchUser($term) {
        $users = [];
        $data = User::select()
            ->where('name', 'like', '%'.$term.'%')->get();


        if ($data) {
            foreach($data as $user) {
                $newUser = new User();
                $newUser->id = $user['id'];
                $newUser->name = $user['name'];
                $newUser->avatar = $user['avatar'];

                $users[] = $newUser;
            }
            
        }
        
        return $users;

    }

    public static function updateNameCityWork($id, $name, $city, $work) {
        User::update()
            ->set('name', $name)
            ->set('city', $city)
            ->set('work', $work)
            ->where('id', $id)
        ->execute();
    }

    public static function updateBirthday($id, $birthdate) {
        User::update()
            ->set('birthdate', $birthdate)
            ->where('id', $id)
        ->execute();
    }

    public static function updateEmail($id, $email) {
        User::update()
            ->set('email', $email)
            ->where('id', $id)
        ->execute();
    }

    public static function updateUser($fields, $idUser) {
        if ( count($fields) > 0 ) {
            
            $update = User::update();

            foreach($fields as $fieldName => $fieldValue){
                if ($fieldName == 'password') {
                    $fieldValue = password_hash($fieldValue, PASSWORD_DEFAULT);
                }
                $update->set($fieldName, $fieldValue);
            }

            $update->where('id', $idUser)->execute();

        }
    }


}