<?php

include_once "conection.php";

$conexion = Conection();

$result = $conexion->query('select * from post where 1;');

?>

<?php while ($row = $result->fetch_assoc()) : ?>
    <p>
        <h1><?php echo $row['title']; ?></h1>
        <img src="<?php echo $row['image']?>" alt="" >
        <p>
            <?php echo $row['body']?>
        </p>
    </p>
<?php endwhile; ?>
docker