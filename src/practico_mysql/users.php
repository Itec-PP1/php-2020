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

$result = $mysqli->query('select * from users where 1;');
?>

<h1> Users </h1>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <tbody>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']?></td>
            <td>
                <a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
<a href="new_user.php">New User</a>
