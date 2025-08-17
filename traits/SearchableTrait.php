<?php
trait SearchableTrait {
    public function searchByTitleOrAuthor($pdo, $term) {
        $stmt = $pdo->prepare("SELECT * FROM books WHERE title LIKE :term OR author LIKE :term");
        $stmt->execute(['term' => "%$term%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
