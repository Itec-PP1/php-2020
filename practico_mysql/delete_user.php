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

// sql to delete a record
$sql = "DELETE FROM users WHERE id= $userId";

$result = $mysqli->query($sql);

header('Location: users.php');