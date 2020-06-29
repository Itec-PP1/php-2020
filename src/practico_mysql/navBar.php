<?php

include_once "conection.php";

$conexion= Conection();

    $result = $conexion->query("SELECT name FROM links;");
    $cant = mysqli_num_rows($result);    
       
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Productos</title>
</head>
<body>
<!-- NavBar -->
<?php
    while($fila = mysqli_fetch_array($result)) {
        echo '<li><a href="#" >'.$fila['name'].'</a></li>';
    }
        
                
    
    
?>



    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>