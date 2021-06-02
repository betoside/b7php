<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class ConfigController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();
        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
        
    }

    public function index($atts = []) {

        $id = $this->loggedUser->id;

        $user = UserHandler::getUser($id, true);
        if (!$user) {
            $this->redirect('/');
        }

        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        // echo "é index";
        
        $this->render('config', [
            'loggedUser' => $this->loggedUser,
            'user' => $user,
            'flash' => $flash
        ]);

    }    

    public function configAction() {
        $flash = '';
        $idUser = $this->loggedUser->id;
        // $idUser = filter_input(INPUT_POST, 'idUser');
        $name = filter_input(INPUT_POST, 'name');
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $city = filter_input(INPUT_POST, 'city');
        $work = filter_input(INPUT_POST, 'work');
        $password = filter_input(INPUT_POST, 'password');
        $newPassword = filter_input(INPUT_POST, 'newpassword');

        // echo "idUser: " . $idUser . "<br>";
        // echo "name: " . $name . "<br>";
        // echo "email: " . $email . "<br>";
        // echo "password: " . $password . "<br>";
        // echo "newPassword: " . $newPassword . "<br>";
        // echo "birthdate: " . $birthdate . "<br>";
        // echo "city: " . $city . "<br>";
        // echo "work: " . $work . "<br>";
        // return;

        if ($idUser && $name && $city && $work) {
            UserHandler::updateNameCityWork($idUser, $name, $city, $work);
        }

        if ($birthdate) {
            // recebendo neste formato brasileiro: dd/mm/aa
            $birthdate = explode('/', $birthdate);

            if (count($birthdate) != 3) {
                $flash .= 'Data de nascimento inválida \n';
                // $_SESSION['flash'] = 'Data de nascimento inválida.';
            }

            $birthdate = $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0];
            if (strtotime($birthdate) === false) {
                $flash .= 'Data de nascimento inválida. \n';
            }

            if ($flash == '') {
                UserHandler::updateBirthday($idUser, $birthdate);
            }


        } else {
            $flash .= 'Data de nascimento inválida';
            // return;
            $this->redirect('/config');
        }

        $user = UserHandler::getUser($idUser);
        if($email != $user->email){
            if (UserHandler::emailExists($email) === false) {
                UserHandler::updateEmail($idUser, $email);
                $flash .= 'Email atualizado <br>';
                $_SESSION['flash'] = $flash;
                $this->redirect('/config');
            } else {
                $_SESSION['flash'] = 'Email já cadastrado';
                $this->redirect('/config');
            }
        }

        // PASSWORD
        if(!empty($password)) {
            if($password === $passwordConfirm) {
                $updateFields['password'] = $password;
            } else {
                $_SESSION['flash'] = 'As senhas não batem.';
                $this->redirect('/config');
            }
        }

        $this->redirect('/config');

    }

    public function save() {
        // echo "Save";
        // $flash = '';
        // $idUser = $this->loggedUser->id;
        // $idUser = filter_input(INPUT_POST, 'idUser');
        $name = filter_input(INPUT_POST, 'name');
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $city = filter_input(INPUT_POST, 'city');
        $work = filter_input(INPUT_POST, 'work');
        $password = filter_input(INPUT_POST, 'password');
        $passwordConfirm = filter_input(INPUT_POST, 'password_confirm');

        // echo "idUser: " . $idUser . "<br>";
        // echo "name: " . $name . "<br>";
        // echo "birthdate: " . $birthdate . "<br>";
        // echo "email: " . $email . "<br>";
        // echo "city: " . $city . "<br>";
        // echo "work: " . $work . "<br>";
        // echo "password: " . $password . "<br>";
        // echo "passwordConfirm: " . $passwordConfirm . "<br>";
        // return;

        if ($name && $email) {
            $updateFields = [];

            $user = UserHandler::getUser($this->loggedUser->id);

            // EMAIL
            if ($user->email != $email) {
                if (!UserHandler::emailExists($email)) {
                    $updateFields['email'] = $email;
                } else {
                    $_SESSION['flash'] = "E-mail já existe";
                    $this->redirect("/config");
                }
            }

            // BIRTHDATE
            $birthdate = explode('/', $birthdate);
            if (count($birthdate) != 3) {
                $_SESSION['flash'] = "Data de nascimento inválida";
                $this->redirect('/config');
            }
            $birthdate = $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0];
            if (strtotime($birthdate) === false) {
                $_SESSION['flash'] = "Data de nascimento inválida";
                $this->redirect('/config');
            }
            $updateFields['birthdate'] = $birthdate;

            // PASSWORD
            if (!empty($password)) {
                if ($password === $passwordConfirm) {
                    $updateFields['password'] = $password;
                } else {
                    $_SESSION['flash'] = 'As senhas não batem';
                    $this->redirect('/config');
                }
            }

            // CAMPOS NORMAIS
            $updateFields['name'] = $name;
            $updateFields['city'] = $city;
            $updateFields['work'] = $work;

            // AVATAR
            // mudar a foto original
            // mudar o tamanho
            // mudar a pasta de destino
            // criar uma funcao auxiliar
            if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['tmp_name'])) {
                $newAvatar = $_FILES['avatar'];
                // echo "<pre>";
                // print_r($newAvatar);
                // echo "</pre>";
                // return;

                // http://localhost:8888  /B7Web-PHP/mod12-Projeto-MVC-Devsbook/devsbook/public/media/covers/cover.jpg
                // const BASE_DIR = '     /B7Web-PHP/mod12-Projeto-MVC-Devsbook/devsbook/public';

                // echo "File + base: ";
                // $path1 = $base.'/media/avatars';
                // echo file_exists($path1); // retornou nada
                
                // $path2 = 'media/avatars';
                // echo "<br> File - base: ";
                // echo file_exists($path2); // retornou 1
                // return;

                if (in_array($newAvatar['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $avatarName = $this->cutImage($newAvatar, 200, 200, 'media/avatars'); // $base.'/media/avatars'
                    $updateFields['avatar'] = $avatarName;
                }
            }

            // COVER
            if (isset($_FILES['cover']) && !empty($_FILES['cover']['tmp_name'])) {
                $newCover = $_FILES['cover'];

                if (in_array($newCover['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $coverName = $this->cutImage($newCover, 850, 310, 'media/covers'); // $base.'/media/covers'
                    $updateFields['cover'] = $coverName;
                }
            }

            UserHandler::updateUser($updateFields, $this->loggedUser->id);

        }

        $this->redirect('/config');

    }

    private function cutImage($file, $w, $h, $folder){

        // echo "file: " . $file . "<br>";
        // echo "<pre>";
        // print_r($file);
        // echo "</pre>";
        // echo "w: " . $w . "<br>";
        // echo "h: " . $h . "<br>";
        // echo "folder: " . $folder . "<br>";
        // die();

        // echo "<pre>";
        // print_r(getimagesize($file['tmp_name']));
        // echo "</pre>";
        // die();

        list($widthOrig, $heightOrig) = getimagesize($file['tmp_name']);
        $ratio = $widthOrig / $heightOrig;
        // echo "ratio: " . $ratio . "<br>";
        // die();

        $newWidth = $w;
        $newHeight = $newWidth / $ratio;

        if ($newHeight < $h) {
            $newHeight = $h;
            $newWidth = $newHeight * $ratio;
        }

        $x = $w - $newWidth;
        $y = $h - $newHeight;
        $x = $x < 0 ? $x / 2 : $x;
        $y = $y < 0 ? $y / 2 : $y;


        echo "<pre>";
        print_r($file["tmp_name"]);
        echo "</pre>";

        $finalImage = imagecreatetruecolor($w, $h);
        switch ($file['type']) {
            case 'image/jpeg':
            case 'image/jpg':
                $image = imagecreatefromjpeg($file["tmp_name"]);
                break;

                // echo "<pre>";
                // print_r($image);
                // echo "</pre>";

            case 'image/png':
                $image = imagecreatefrompng($file["tmp_name"]);
                break;

                // echo "<pre>";
                // print_r($image);
                // echo "</pre>";
            }
            // die();

        // echo $image;
        // die();

        imagecopyresampled(
            $finalImage, $image,
            $x, $y, 0, 0,
            $newWidth,  $newHeight, $widthOrig, $heightOrig
        );

        $fileName = md5(time().rand(0,9999)).'.jpg';

        // echo $folder.'/'.$fileName;
        // exit;

        // echo $base.'/'.$folder.'/'.$fileName;
        // exit;

        imagejpeg($finalImage, $folder.'/'.$fileName);

        return $fileName;

    }

}