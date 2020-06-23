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

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];

$query = "INSERT INTO users (username, email, password, avatar) VALUES ('$username', '$email', '$password' , '$avatar');";

$mysqli->query($query);

header('Location: users.php');