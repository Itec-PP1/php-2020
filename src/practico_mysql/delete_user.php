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

$userId = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id= $userId";

$result = $mysqli->query($sql);

header('Location: users.php');