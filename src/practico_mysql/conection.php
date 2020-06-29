<?php

function Conection(){
    $mysqli = new mysqli(
        'mysql',
        'root',
        'password',
        'db'
    );
    
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    return $mysqli;
    
};

?>