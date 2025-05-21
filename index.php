<?php
require_once 'connection.php';
require_once 'controladores/departamentos.php';

// ** SELECT para obtener las personas
// ** Guarda el resultado de la consulta en $array_filas
$selectPerson = "SELECT pe.id_persona, pe.nombre_persona, pe.apellido_persona, pe.email, de.nombre_departamento as departamento, de.color_departamento
FROM personas pe
NATURAL JOIN departamentos de
";
$selectPerson = $pdo->prepare($selectPerson);
$selectPerson->execute();
$array_filas = $selectPerson->fetchAll();
$selectPerson = null;
$pdo = null;

// print_r($array_filas);
// echo "<br>"."-----------------"."<br>";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <?php include_once 'header.php' ?>
    <main>
        
        <div>

        <section>

        <div class="people">
            
        <h2>Dirección</h2>
            <div >                
                <?php foreach($array_filas as $fila) : ?>                    
    
                        <?php if ($fila['departamento'] == "direccion") : ?>
                            <?php include "modulos/people.php"; ?>
                        <?php endif; ?>
                             
                <?php endforeach; ?>
            </div>
            
            <h2>Contabilidad</h2>
            <div >                
                <?php foreach($array_filas as $fila) : ?>                    
                
                        <?php if ($fila['departamento'] == "contabilidad") : ?>
                            <?php include "modulos/people.php"; ?>
                        <?php endif; ?>
                             
                <?php endforeach; ?>
            </div>
            
            <h2>Ventas</h2>
            <div >                
                <?php foreach($array_filas as $fila) : ?>                    
             
                        <?php if ($fila['departamento'] == "ventas") : ?>
                            <?php include "modulos/people.php"; ?>
                        <?php endif; ?>
                               
                <?php endforeach; ?>
            </div>
            
            <h2>Programación</h2>
            <div >                
                <?php foreach($array_filas as $fila) : ?>                    
                
                        <?php if ($fila['departamento'] == "programacion") : ?>
                            <?php include "modulos/people.php"; ?>
                        <?php endif; ?>
                                    
                <?php endforeach; ?>
            </div>

        </div>
        </section>
        <section>
            <h2>Evaluación contínua</h2>
                <p>¡Completa los formularios!</p>
               



 
        <?php

// ** Aquí deben ir los dos formularios de la aplicación

        
        $peticion = $_GET['formulario'];
        switch ($peticion) {
            case 'anadir':
                include_once 'modulos/add_person.php';
                break;
            case 'modificar':
                include_once 'modulos/editar_datos.php';
                break;
            default:
                include_once 'modulos/add_person.php';
                break;
        }


?>

        </section>
        </div>

    </main>
</body>

</html>