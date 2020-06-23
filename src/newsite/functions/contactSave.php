<?php

$firstname = $_POST['firstname']; // Validar string not null min(3)
$lastname  = $_POST['lastname']; // Validar  string
$email     = $_POST['email'];    // Validar  string not null email_valid
$message   = $_POST['message'];  // Validar  string not null

$errorForm = [];

// Validar $firstname string not null
if (($firstname !== null) && (is_string($firstname))){
    echo "Fist Name is valid";
}elseif ($firstname !== null){
    $errorForm['firstname'][] = ['message' => 'Fist name null error'];
}elseif (){
    $errorForm['firstname'][] = ['message' => 'Fist name should string value'];
}

// Consigna Validar todos los campos en caso que este ok mostrar todo ok
// caso contrario mostrar un listado de errores.

if(empty($errorForm)){
    echo 'Todos los datos estan OK';
}else{
    foreach ($errorForm as $field => $errorMessage){
        echo "Error en $field ($errorMessage)";
    }
}
