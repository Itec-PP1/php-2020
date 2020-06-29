<?php

include_once "conection.php";

$conexion= Conection();

$userId = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];

$sql = "UPDATE users SET username='$username', email = '$email', password = '$password', avatar = '$avatar'  WHERE id=$userId";

mysqli_query($conexion, $sql);

header('Location: users.php');