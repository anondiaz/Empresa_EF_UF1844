<?php

// Array de prueba para los departamentos
// Se ha creado para poder probar la aplicación sin necesidad de tener la base de datos
// $datosDepartamentos = [
//     ["id_departamento" => 1, "nombre_departamento" => "direccion", "color_departamento" => "darksalmon"],
//     ["id_departamento" => 2, "nombre_departamento" => "contabilidad", "color_departamento" => "steelblue"],
//     ["id_departamento" => 3, "nombre_departamento" => "ventas", "color_departamento" => "#f9e79f"],
//     ["id_departamento" => 4, "nombre_departamento" => "programacion", "color_departamento" => "#a9dfbf"]
// ];


// Cargar la conexión a la base de datos
include_once 'connection.php';

// Definir la querie como string
$selectDptos = "SELECT * FROM departamentos";

// Preparación de la consulta
$preparacion = $pdo->prepare($selectDptos);

//Ejecución de la consulta
$preparacion->execute();

//Obtenemos todos los valores
$datosDepartamentos = $preparacion->fetchAll();

// Se borra la consulta
$selectDptos = null;

// Cerramos la conexión
// $pdo = null;

// Comprobación de que obtenemos los datos
// print_r($$datosDepartamentos);
// echo "<br>"."--------------------"."<br>";