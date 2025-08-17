
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Users List</h2>
<a href="index.php?action=addUserForm">Add New User</a>
<table border="1">
    <tr>
        <th>Name</th><th>Email</th><th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= htmlspecialchars($user['name']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
        <td>
            <a href="index.php?action=editUser&id=<?= $user['id'] ?>">Edit</a> |
            <a href="index.php?action=deleteUser&id=<?= $user['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table> 
</body>
</html>