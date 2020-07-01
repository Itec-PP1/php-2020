<?php

include_once "conection.php";

$conexion= Conection();

$result = $conexion->query("SELECT name, uri FROM links;");
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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <?php while($fila = mysqli_fetch_array($result)) : ?>
          <li class="nav-item active">
              <?php echo '<a class="nav-link" href="'.$fila['uri'].'" >'.$fila['name'].'</a>'; ?>
          </li>
        <?php endwhile;?>
      </ul>
    </nav>
    <!-- End NavBar -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>