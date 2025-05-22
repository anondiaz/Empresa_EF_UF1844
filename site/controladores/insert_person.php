<?php
// Cargamos la conexion a la base de datos
require_once '../connection.php';
// Cargamos el array de departamentos
require_once 'departamentos.php';

// print_r($_GET);

// Establecemos la variable $id_departamento a 0
// para que no de error si no se encuentra el departamento
$id_departamento = 0;

// Recorremos el array de datosDepartamentos
// para encontrar el id del departamento que coincide con el nombre del departamento
// Y lo guardamos en la variable $id_departamento
foreach ($datosDepartamentos as $departamento) {
    if ($departamento['nombre_departamento'] == $_GET['departamento']) {
        $id_departamento = $departamento['id_departamento'];
    }
}

// Generamos el hash de la contraseña
$hash = password_hash($password, PASSWORD_DEFAULT);

// echo $id_departamento;

//  ** Completa esto ** 
// Creamos la consulta para insertar los datos de la persona
$insertPerson = "INSERT INTO personas(nombre_persona, apellido_persona, password, email, id_departamento) VALUES (?, ?, ?, ?, ?)";
// Preparamos la consulta
$insertPerson = $pdo -> prepare($insertPerson);
// Ejecutamos la consulta
$insertPerson -> execute([$_GET['nombre'], $_GET['apellidos'], $hash, $_GET['email'], $id_departamento]);
// Borramos la consulta
$insertPerson = null;
// Cerramos la conexión
$pdo = null;
// Redirigimos a la página principal
header("Location: ../index.php");
