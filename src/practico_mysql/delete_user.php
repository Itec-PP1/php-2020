<?php

require_once ('functions/dbFunctions.php');
$connection = getDataBaseConnection();

$userId = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id= $userId";
$result = $connection->query($sql);

$connection->close();

header('Location: users.php');