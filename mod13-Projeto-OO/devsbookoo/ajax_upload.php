<?php
require_once 'config.php';
require_once 'models/Auth.php';
// require_once 'dao/PostDaoMySql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

// $maxWidth = 800;
// $maxHeight = 800;
// foi la para o config.php

$array = ['error' => ''];

$postDao = new PostDaoMysql($pdo);

if (isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name'])) {
    $photo = $_FILES['photo'];
     
    if (in_array($photo['type'], ['image/png','image/jpeg','image/jpg'])) {
        
        list($widthOrig,$heightOrig) = getimagesize($photo['tmp_name']);
        $ratio = $widthOrig / $heightOrig;

        $newWidth = $maxWidth;
        $newHeigth = $maxHeight;
        $ratioMax = $maxWidth / $newHeigth;

        if ($ratioMax > $ratio) {
            $newWidth = $newHeigth * $ratio;
        } else {
            $newHeigth = $newWidth / $ratioMax;
        }

        $finalImage = imagecreatetruecolor($newWidth, $newHeigth);
        switch ($photo['type']) {
            case 'image/jpg':
            case 'image/jpeg':
                $image = imagecreatefromjpeg($photo['tmp_name']);
                break;
                
            case 'image/png':
                $image = imagecreatefrompng($photo['tmp_name']);
                break;
        }

        imagecopyresampled(
            $finalImage, $image,
            0, 0, 0, 0,
            $newWidth, $newHeigth, $widthOrig, $heightOrig
        );

        $photoName = md5(time().rand(0,9999)).'.jpg';
        imagejpeg($finalImage, 'media/uploads/'.$photoName);

        $newPost = new Post();
        $newPost->id_user = $userInfo->id;
        $newPost->type = 'photo';
        $newPost->created_at = date('Y-m-d H:i:s');
        $newPost->body = $photoName;

        $postDao->insert($newPost);

    } else {
        $array['error'] = 'Arquivo não suportado (jpg ou png)';
    }

} else {
    $array['error'] = 'Nenhuma imagem enviada';
}


header("Content-Type: application/json");
echo json_encode($array);
exit;