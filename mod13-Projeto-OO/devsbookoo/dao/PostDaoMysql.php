<?php
require_once "models/Post.php";
require_once 'dao/UserRelationDaoMysql.php';
require_once 'dao/UserDaoMysql.php';
require_once 'dao/PostLikeDaoMysql.php';

class PostDaoMysql implements PostDAO {
    private $pdo;

    public function __construct(PDO $driver) {
        $this->pdo = $driver;
    }

    public function insert(Post $p) {
        // echo "INSERT";
        // echo "<pre>";
        // print_r($p);
        // echo "</pre>";
        // exit;

        $sql = $this->pdo->prepare("INSERT INTO posts (
             id_user, type, created_at, body
         ) VALUES (
             :id_user, :type, :created_at, :body
         )");

        $sql->bindValue(':id_user', $p->id_user);
        $sql->bindValue(':type', $p->type);
        $sql->bindValue(':created_at', $p->created_at);
        $sql->bindValue(':body', $p->body);
        $sql->execute();

        return true;
    }

    public function getUserFeed($id_user) {
        $array = [];

        $sql = $this->pdo->prepare("SELECT * FROM posts 
        WHERE id_user = :id_user
        ORDER BY created_at DESC");
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

            $array = $this->_postListToObject($data, $id_user);
        }

        return $array;

    }

    public function getHomeFeed($id_user) {
        $array = [];
        // 3 passos para pegar o feed
        // 1 pegar a lista dos users que eu sigo (tab: userrelations)
            // precisa ter um model que controla essa tabela
        $urDao = new UserRelationDaoMysql($this->pdo);
        $userList = $urDao->getFollowing($id_user);
        $userList[] = $id_user;
        // print_r($userList);
        // exit;

        // 2 pegar os posts da lista da galera, ordem cronologica
        // pegar os posts pela data
        $sql = $this->pdo->query("SELECT * FROM posts 
        WHERE id_user IN (".implode(',', $userList).")
        ORDER BY created_at DESC
        ");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

            // 3 transformar o resultado em objetos
            $array = $this->_postListToObject($data, $id_user);
        }

        return $array;

    }

    public function getPhotosFrom($id_user) {
        $array = [];

        $sql = $this->pdo->prepare("SELECT * FROM posts
        WHERE id_user = :id_user AND type = 'photo'
        ORDER BY created_at DESC");
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            $array = $this->_postListToObject($data, $id_user);
        }

        return $array;

    }

    private function _postListToObject($post_list, $id_user) {
        $posts = [];
        $userDao = new UserDaoMysql($this->pdo);
        $postLikeDao = new PostLikeDaoMysql($this->pdo);

        foreach ($post_list as $post_item) {
            $newPost = new Post();
            $newPost->id = $post_item['id'];
            // $newPost->id_user = $post_item['id_user']; // nao precisa desse cara
            $newPost->type = $post_item['type'];
            $newPost->created_at = $post_item['created_at'];
            $newPost->body = $post_item['body'];
            $newPost->mine = false;

            if ($post_item['id_user'] == $id_user) {
                $newPost->mine = true;
            }

            // pegar informacoes complementares
            $newPost->user = $userDao->findById($post_item['id_user']);

            // informacoes sobre LIKE
            $newPost->likeCount = $postLikeDao->getLikeCount($newPost->id);
            $newPost->liked = $postLikeDao->isLiked($newPost->id, $id_user);

            // informacoes sobre COMMENTS
            $newPost->comments = [];

            $posts[] = $newPost;
        }
        
        return $posts;
    }
  
}