<?php

require_once ('functions/dbFunctions.php');
$connection = getDataBaseConnection();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];

$query = "INSERT INTO users (username, email, password, avatar) VALUES ('$username', '$email', '$password' , '$avatar');";

$connection->query($query);
$connection->close();

header('Location: users.php');