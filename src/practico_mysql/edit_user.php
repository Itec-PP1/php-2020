<?php

include_once "conection.php";

$conexion= Conection();

$userId = $_GET['id'];

$result = $conexion->query("SELECT * FROM users WHERE id = $userId;");

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