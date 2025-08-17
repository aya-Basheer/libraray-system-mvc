
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Add New Book</h2>
<form method="post" action="index.php?action=addBook">
    <label>Title:</label>
    <input type="text" name="title" required><br><br>

    <label>Author:</label>
    <input type="text" name="author" required><br><br>

    <label>Copies:</label>
    <input type="number" name="copies" value="1" min="1"><br><br>

    <button type="submit">Save</button>
</form> 
</body>
</html>