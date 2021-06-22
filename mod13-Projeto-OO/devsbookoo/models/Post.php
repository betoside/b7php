<?php
class Post {
    public $id;
    public $id_user;
    public $type; // text / photo
    public $created_at;
    public $body;
} // criamos o model de post

// agora vamos criar a interface de dao para poder criar o DAO
// comecar pela insercao
interface PostDao{
    public function insert(Post $p);
    public function getUserFeed($id_user);
    public function getHomeFeed($id_user);
    public function getPhotosFrom($id_user);
}