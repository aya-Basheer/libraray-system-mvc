<?php
namespace App\Controllers;

use App\Models\Book;

class BookController {
    // private $book;

   
    
   public function index(){
        $book=new Book ();

        $books=$book->all();

  require __DIR__ . '/../views/books/list.php';
    }

   

    public function add($data) {
        $this->book->add($data['title'],$data['author'],$data['copies']);
        header('Location: index.php?action=listBooks'); exit;
    }

    public function edit($id,$data) {
        $this->book->update($id,$data['title'],$data['author'],$data['copies']);
        header('Location: index.php?action=listBooks'); exit;
    }

    public function delete($id) {
        $this->book->delete($id);
        header('Location: index.php?action=listBooks'); exit;
    }

    public function search($term) {
        $books = $this->book->search($term);
        require __DIR__ . '/../views/books/list.php';
    }

    public function showEditForm($id) {
        $book = $this->book->find($id);
        require __DIR__ . '/../views/books/edit.php';
    }
}
