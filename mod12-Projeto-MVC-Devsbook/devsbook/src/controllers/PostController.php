<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\PostHandler;

class PostController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();
        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
        // echo "loggedUser: ";
        // echo $this->loggedUser->id;
        // echo "<br>";
    }

    public function new() {
        $body = filter_input(INPUT_POST, 'body');
        // echo "CORPO: " . $body ." - ID: ". $this->loggedUser->id;
        // echo "<hr>";
        // echo "loggedUser: ";
        // echo "<pre>";
        // print_r($this->loggedUser);
        // echo "<hr>";

        if ($body) {
            PostHandler::addPost(
                $this->loggedUser->id,
                'text',
                $body
            );
        }

        $this->redirect("/");
    }
 
    public function delete($atts = []) {
        // echo 'DELETE';
        // return;
        if (!empty($atts)) {
            $idPost = $atts['id'];

            PostHandler::delete(
                $idPost,
                $this->loggedUser->id
            );
        }

        $this->redirect('/');
    }

}