<?php

// Cargar la conexión a la base de datos
require_once '../connection.php';
// Cargar el array de datosDepartamentos
require_once 'departamentos.php';

// print_r($_POST);


// Establecemos la variable $id_departamento a 0
$id_departamento = 0;

// Recorremos el array de datosDepartamentos
// para encontrar el id del departamento que coincide con el nombre del departamento 
foreach ($datosDepartamentos as $departamento) {
    if ($departamento['nombre_departamento'] == $_POST['departamento']) {
        $id_departamento = $departamento['id_departamento'];
    }
}

// Generamos el hash de la contraseña
$hash = password_hash($password, PASSWORD_DEFAULT);

// echo $id_departamento;

//  ** Completa esto **


// Definir la querie como string
$updatePerson = "UPDATE personas SET nombre_persona = ?, apellido_persona = ?, password = ?, id_departamento = ?, email = ? WHERE id_persona = ?";

// Preparamos la consulta
$updatePreparacion = $pdo -> prepare($updatePerson);

//Ejecutamos la consulta
$updatePreparacion -> execute([$_POST['nombre'], $_POST['apellidos'], $hash, $id_departamento, $_POST['email'], $_POST['id']]);

// Limpiamos el insert
$updatePreparacion = null;

// Cerramos la conexión
$pdo = null;

// Redirigimos la pagina index.php
header("Location: ../index.php");

