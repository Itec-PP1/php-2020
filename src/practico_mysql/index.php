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

$result = $mysqli->query('select * from post where 1;');

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