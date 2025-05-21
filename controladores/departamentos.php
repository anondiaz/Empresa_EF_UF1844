<?php
// Cargar la conexión a la base de datos
// include_once '../connection.php';

// Definir la querie como string
$select = "SELECT * FROM departamentos";

// Preparación dela consulta
$preparacion = $pdo->prepare($select);

//Ejecución de la consulta
$preparacion->execute();

//Obtenemos todos los valores
$array_departamentos = $preparacion->fetchAll();

// Comprobación de que obtenemos los datos
// print_r($array_departamentos);
// echo "<br>"."--------------------"."<br>";