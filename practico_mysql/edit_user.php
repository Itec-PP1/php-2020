<?php

$mysqli = new mysqli(
    '172.27.0.2',
    'root',
    'password',
    'blog_php_2020'
);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$userId = $_GET['id'];

$result = $mysqli->query("SELECT * FROM users WHERE id = $userId;");

$user = $result->fetch_assoc();
?>

<h2>Edit <?php echo $user['username']; ?></h2>
<form action="save_edit_user.php" method="post">

    <input name="id" type="hidden" value="<?php echo $userId; ?>">

    <label for="username">Username</label>
    <input name="username" type="text" required value="<?php echo $user['username']; ?>">

    <label for="email">Email</label>
    <input name="email" type="text" required value="<?php echo $user['email']; ?>">

    <label for="password">Password</label>
    <input name="password" type="password" required value="<?php echo $user['password']; ?>">

    <label for="avatar">Avatar</label>
    <input name="avatar" type="text" value="<?php echo $user['avatar']; ?>">

    <input type="submit" value="Enviar">
</form>