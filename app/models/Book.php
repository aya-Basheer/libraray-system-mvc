<?php
namespace App\Models;

use App\Core\App;
require_once __DIR__ . '/../traits/LoggingTrait.php';
require_once __DIR__ . '/../traits/SearchableTrait.php';

class Book {
    use LoggingTrait, SearchableTrait;

    private $pdo;

    public function __construct() {
        $this->pdo = App::db();
    }

    public function all() {
        return $this->pdo->query("SELECT * FROM books")->fetchAll();
    }

    public function find($id){
        $stmt = $this->pdo->prepare("SELECT * FROM books WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }

    public function add($title, $author, $copies) {
        $stmt = $this->pdo->prepare("INSERT INTO books (title, author, copies) VALUES (:title, :author, :copies)");
        $stmt->execute(['title'=>$title,'author'=>$author,'copies'=>$copies]);
        $this->log("Book added: $title");
    }

    public function update($id, $title, $author, $copies) {
        $stmt = $this->pdo->prepare("UPDATE books SET title=:title, author=:author, copies=:copies WHERE id=:id");
        $stmt->execute(['id'=>$id,'title'=>$title,'author'=>$author,'copies'=>$copies]);
        $this->log("Book updated: $title");
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM books WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        $this->log("Book deleted: $id");
    }

    public function search($term) {
        $stmt = $this->pdo->prepare("SELECT * FROM books WHERE title LIKE :term OR author LIKE :term");
        $stmt->execute(['term' => "%$term%"]);
        return $stmt->fetchAll();
    }
}
