<?php

require_once '../connection.php';

print_r($_POST);

//  ** Completa esto ** 
// Definir la querie como string
$insert = "INSERT INTO personas(nombre_persona, apellido_persona, password, id_departamento, email) VALUES (?, ?, ?, ?, ?)";

// Preparación, '->' con espacios antes y después opcional
$insertPreparacion = $pdo -> prepare($insert);

//Ejecución, '->' con espacios antes y después opcional
$insertPreparacion -> execute([$_POST['nombre'], $_POST['apellidos'], $_POST['password'], $id_departamento, $_POST['email']]);

// // Limpiamos el insert
// $insertPreparacion = null;

// // Cerramos la conexión
// $pdo = null;

// // Recargamos la pagina index.php
// header('location:index.php');