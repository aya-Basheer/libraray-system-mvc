<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>
    
    <!-- Search Form -->
    <form method="get" action="index.php">
        <input type="hidden" name="action" value="searchBook">
        <input type="text" name="keyword" placeholder="Search by title or author">
        <button type="submit">Search</button>
    </form>
    <a href="index.php?action=addBook">Add Book</a>
    
    <table border="1">
        <tr>
            <th>ID</th><th>Title</th><th>Author</th><th>Actions</th>
        <!-- </tr>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= htmlspecialchars($book['id']) ?></td>
                <td><?= htmlspecialchars($book['title']) ?></td>
                <td><?= htmlspecialchars($book['author']) ?></td>
                <td>
                    <a href="index.php?action=editBook&id=<?= $book['id'] ?>">Edit</a> |
                    <a href="index.php?action=deleteBook&id=<?= $book['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?> -->
    </table>
</body>
</html>
