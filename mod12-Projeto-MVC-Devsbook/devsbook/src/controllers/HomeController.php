<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\PostHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();
        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }

        // melhor lugar p verificar se o user esta logado ou nao.
        // se nao verificar aqui entao terá que verificar em todas as paginas do sistema
        // $this->redirect('/login');

    }

    public function index() {

        $page = intval(filter_input(INPUT_GET, 'page'));
        // echo $page;

        // $feed = "TESTE FEED";
        $feed = PostHandler::getHomeFeed(
            $this->loggedUser->id,
            $page
        );
        
        $this->render('home', [
            'loggedUser' => $this->loggedUser,
            'feed' => $feed
        ]);
    }
    

}