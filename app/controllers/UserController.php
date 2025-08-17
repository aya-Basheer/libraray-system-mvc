<?php
namespace App\Controllers;
// require_once 'models/User.php';
use App\Models\User;
class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        $users = $this->user->all();
        require 'views/users/list.php';
    }

    public function add($data) {
        $this->user->add($data['name'], $data['email']);
        header('Location: index.php?action=listUsers');
    }

    public function edit($id, $data) {
        $this->user->update($id, $data['name'], $data['email']);
        header('Location: index.php?action=listUsers');
    }

    public function delete($id) {
        $this->user->delete($id);
        header('Location: index.php?action=listUsers');
    }

    public function showEditForm($id) {
        $user = $this->user->find($id);
        require 'views/users/edit.php';
    }
}
