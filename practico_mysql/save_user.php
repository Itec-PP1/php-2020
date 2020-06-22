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

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];

$query = "INSERT INTO users (username, email, password, avatar) VALUES ('$username', '$email', '$password' , '$avatar');";

$mysqli->query($query);

header('Location: users.php');