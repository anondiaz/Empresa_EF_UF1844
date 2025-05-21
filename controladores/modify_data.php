<?php

// Cargamos los datos de departamento llamando al fichero que genera la consulta
require_once './departamentos.php';

//  ** Completa esto **

// Prueba de recepción de datos de los departamentos
// print_r($array_departamentos);
// echo "<br>"."--------------------"."<br>";

// Prueba de recepción de los datos del formulario
// echo $_POST['estado'];
// echo "<br>"."--------------------"."<br>";

// $id_departamento = 0;

// foreach ($array_departamento as $id_subarrayestado) {
//     // echo $id_subarrayestado['nombre_estado'] . "estado";
//     // echo "<br>"."--------------------"."<br>";
//     // echo $_POST['estado'] . "estado";
//     // echo "<br>"."--------------------"."<br>";
//     // echo $id_subarrayestado['id_estado'] . "id_estado";
//     // echo "<br>"."--------------------"."<br>";

//     if ($_POST['departamento'] == $id_departamento['nombre_departamento']){
//         $id_departamento = $id_subarrayestado['id_estado'];
//         // echo $id_estado;
//         // echo "<br>"."--------------------"."<br>";
//         // echo $id_subarrayestado['id_estado'];
        
//     }
// }


// // Definir la querie como string
// $update = "UPDATEpersonas(nombre_persona, apellido_persona, password, id_departamento, email) VALUES (?, ?, ?, ?, ?) WHERE id_persona = ?";

// // Preparación, '->' con espacios antes y después opcional
// $updatePreparacion = $conn -> prepare($update);

// //Ejecución, '->' con espacios antes y después opcional
// $updatePreparacion -> execute([$_POST['titulo'], $_POST['descripcion'], $fechahorafin, $id_estado, 1, 1, $_POST['id']]);

// // Limpiamos el insert
// $updatePreparacion = null;

// // Cerramos la conexión
// $conn = null;

// // Recargamos la pagina index.php
// header('location:index.php');