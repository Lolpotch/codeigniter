<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="update/<?= $user['id']; ?>" method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $user['name']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>