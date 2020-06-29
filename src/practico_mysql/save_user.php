<?php

include_once "conection.php";

$conexion= Conection();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];

$query = "INSERT INTO users (username, email, password, avatar) VALUES ('$username', '$email', '$password' , '$avatar');";

$conexion->query($query);

header('Location: users.php');