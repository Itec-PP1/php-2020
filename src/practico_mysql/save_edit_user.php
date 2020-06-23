<?php

$mysqli = new mysqli(
    'mysql',
    'root',
    'password',
    'db'
);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$userId = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];

$sql = "UPDATE users SET username='$username', email = '$email', password = '$password', avatar = '$avatar'  WHERE id=$userId";

mysqli_query($mysqli, $sql);

header('Location: users.php');