<!-- ** Completa esto ** -->
<?php

// Cargar la conexión a la base de datos
include_once 'connection.php';

// Definir la querie como string para cargar los departamentos
$select = "SELECT * FROM departamentos";

// Preparación de la consulta
$preparacion = $pdo->prepare($select);

//Ejecución de la consulta
$preparacion->execute();

//Obtenemos todos los valores
$array_departamentos = $preparacion->fetchAll();
// Comprobación de que obtenemos los datos
// print_r($array_departamentos);
// echo "<br>"."--------------------"."<br>";
?>
<form action="../controladores/insert_person.php" method="post">
    <h2>Formulario para añadir persona</h2>
    <div>
        <label for="nombre">* Nombre :</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div>
        <label for="apellidos">* Apellido/s :</label>
        <input type="text" name="apellidos" id="apellidos" required>
    </div>
    <div>
        <label for="password">La contraseña debe ser actualizada:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <select name="departamento" id="departamento">
            <?php foreach ($array_departamentos as $id_subarray_departamentos) : ?>
                <option value="<?=$id_subarray_departamentos['nombre_departamento']?>">
                    
                    <?=$id_subarray_departamentos['nombre_departamento']?></option>
            <?php endforeach ?>
        </select>
        <!-- <option value="Pendiente" <?= $estado === 'Pendiente' ? 'selected' : '' ?>>Pendiente</option> -->

    </div>
    <div class="buttons">
        <button type="submit">Añadir persona</button>
        <button type="reset">Borrar formulario</button>
    </div>
    <p>Los campos marcados con * son obligatorios</p>
    <a href="index.php">Volver a inicio</a>
</form>