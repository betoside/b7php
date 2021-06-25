<?php
require_once 'config.php';
require_once 'models/Auth.php';
// require_once 'dao/UserRelationDaoMySql.php';
// require_once 'dao/UserDaoMySql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    
    $userRelationDao = new UserRelationDaoMySql($pdo);
    $userDao = new UserDaoMySql($pdo);

    // se o $id existe
    if ($userDao->findById($id)) {
        $relation = new UserRelation();
        $relation->user_from = $userInfo->id;
        $relation->user_to = $id;

        // verificar se nosso user segue o id
        if ($userRelationDao->isFollowing($userInfo->id, $id)) {
            // unfollow
            // echo 'deletou';
            // exit;
            $userRelationDao->delete($relation);
        } else {
            // follow
            // echo 'inseriu';
            // exit;
            $userRelationDao->insert($relation);
        }

        header("Location: perfil.php?id=".$id);
        exit;
    }
}

header("Location: ".$base);
exit;