<?php
class UserRelation {
    public $id;
    public $user_from;
    public $user_to;
}
interface UserRelationDao{
    public function insert(UserRelation $u);
    public function getFollowing($id);
    public function getFollowers($id);
}

// daqui segue para criar o dao para esse model