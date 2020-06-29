<?php

include_once "conection.php";

$conexion= Conection();

$userId = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id= $userId";

$result = $conexion->query($sql);

header('Location: users.php');
?>