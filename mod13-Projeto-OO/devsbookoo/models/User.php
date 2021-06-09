<?php
class User {
    public $id;
    public $email;
    public $password;
    public $name;
    public $birthdate;
    public $city;
    public $work;
    public $avatar;
    public $cover;
    public $token;
    // nao vamos criar o get/set deles pq sao muitos e nem todos vao precisar
    // se precisar de algum em alguma eventualidade a gente cria
    // por isso estao public pq assim tanto altera como acessa diretamente o item
}
interface UserDao{
    public function findBytoken($token);
    public function findByEmail($email);
    public function findById($id);
    public function update(User $u);
    public function insert(User $u);
}