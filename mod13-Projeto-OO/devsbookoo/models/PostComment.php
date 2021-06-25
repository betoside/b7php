<?php
class PostComment {
    public $id;
    public $id_post;
    public $id_user;
    public $created_at;
    public $body;
}

interface PostCommentDao {
    public function getComment($id_post);
    public function addComment(PostComment $pc);
}