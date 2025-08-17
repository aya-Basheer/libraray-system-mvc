
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Edit Book</h2>
<form method="post" action="index.php?action=editBook&id=<?= htmlspecialchars($book['id']) ?>">
    <label>Title:</label>
    <input type="text" name="title" value="<?= htmlspecialchars($book['title']) ?>" required><br><br>

    <label>Author:</label>
    <input type="text" name="author" value="<?= htmlspecialchars($book['author']) ?>" required><br><br>

    <label>Copies:</label>
    <input type="number" name="copies" value="<?= htmlspecialchars($book['copies']) ?>" min="1"><br><br>

    <button type="submit">Update</button>
</form>  
</body>
</html>