<?php
namespace App\Models;

use App\Core\App;
require_once __DIR__ . '/../traits/LoggingTrait.php';

class User {
    use LoggingTrait;

    private $pdo;

    public function __construct() {
        $this->pdo = App::db();
    }

    public function all() {
        return $this->pdo->query("SELECT * FROM users")->fetchAll();
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }

    public function add($name, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO users (name,email) VALUES (:name,:email)");
        $stmt->execute(['name'=>$name,'email'=>$email]);
        $this->log("User added: $name");
    }

    public function update($id, $name, $email) {
        $stmt = $this->pdo->prepare("UPDATE users SET name=:name,email=:email WHERE id=:id");
        $stmt->execute(['id'=>$id,'name'=>$name,'email'=>$email]);
        $this->log("User updated: $name");
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        $this->log("User deleted: $id");
    }
}
