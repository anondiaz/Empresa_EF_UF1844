<?php

require_once '../connection.php';
require_once 'departamentos.php';

// print_r($_POST);



$id_departamento = 0;

foreach ($datosDepartamentos as $departamento) {
    if ($departamento['nombre_departamento'] == $_POST['departamento']) {
        $id_departamento = $departamento['id_departamento'];
    }
}

// echo $id_departamento;

//  ** Completa esto **


// Definir la querie como string
$updatePerson = "UPDATE personas SET nombre_persona = ?, apellido_persona = ?, password = ?, id_departamento = ?, email = ? WHERE id_persona = ?";

// Preparación, '->' con espacios antes y después opcional
$updatePreparacion = $pdo -> prepare($updatePerson);

//Ejecución, '->' con espacios antes y después opcional
$updatePreparacion -> execute([$_POST['nombre'], $_POST['apellidos'], $_POST['contraseña'], $id_departamento, $_POST['email'], $_POST['id']]);

// // Limpiamos el insert
$updatePreparacion = null;

// // Cerramos la conexión
$pdo = null;

// // Recargamos la pagina index.php
header("Location: ../index.php");

