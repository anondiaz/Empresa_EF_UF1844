<?php

require_once '../connection.php';
require_once 'departamentos.php';

// print_r($_GET);



$id_departamento = 0;

foreach ($datosDepartamentos as $departamento) {
    if ($departamento['nombre_departamento'] == $_GET['departamento']) {
        $id_departamento = $departamento['id_departamento'];
    }
}

// echo $id_departamento;

//  ** Completa esto ** 
$insertPerson = "INSERT INTO personas(nombre_persona, apellido_persona, password, email, id_departamento) VALUES (?, ?, ?, ?, ?)";
$insertPerson = $pdo -> prepare($insertPerson);
$insertPerson -> execute([$_GET['nombre'], $_GET['apellidos'], $_GET['contraseña'], $_GET['email'], $id_departamento]);
$insertPerson = null;
$pdo = null;
header("Location: ../index.php");
