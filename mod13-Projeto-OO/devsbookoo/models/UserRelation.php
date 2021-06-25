<?php
class UserRelation {
    public $id;
    public $user_from;
    public $user_to;
}
interface UserRelationDao{
    public function insert(UserRelation $u);
    public function delete(UserRelation $u);
    public function getFollowing($id);
    public function getFollowers($id);
    public function isFollowing($id1, $id2);
}

// daqui segue para criar o dao para esse model