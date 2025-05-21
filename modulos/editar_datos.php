<!-- ** Completa esto ** -->
<?php
include_once 'connection.php';

// Definir la querie como string para cargar los departamentos
$select = "SELECT * FROM departamentos";

// Preparación de la consulta
$preparacion = $pdo->prepare($select);

//Ejecución de la consulta
$preparacion->execute();

//Obtenemos todos los valores
$array_departamentos = $preparacion->fetchAll();

$pdo = null;

// Comprobamos la recepción de los datos del fichero
// print_r($array_departamentos);
// echo "<br>"."--------------------"."<br>";

// print_r($_GET)

?>
<form action="../controladores/modify_data.php" method="post">
    <h2>Editar datos</h2>
    <div>
        <label for="nombre">* Nombre :</label>
        <input type="text" name="nombre" id="nombre" value="<?= $_GET['nombre'] ?>" required>
    </div>
    <div>
        <label for="apellidos">* Apellido/s :</label>
        <input type="text" name="apellidos" id="apellidos" value="<?= $_GET['apellidos'] ?>" required>
    </div>
    <div>
        <label for="password">La contraseña debe ser actualizada:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" value="<?= $_GET['email'] ?>" >
    </div>
    <div>
        <select name="departamento" id="departamento">
            <?php foreach ($array_departamentos as $id_subarray_departamentos) : ?>
                
                <option value="<?=$id_subarray_departamentos['nombre_departamento']?>" <?= $id_subarray_departamentos['nombre_departamento'] === $_GET['departamento'] ? 'selected' : '' ?>>
                    
                    <?=$id_subarray_departamentos['nombre_departamento']?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="buttons">
        <button type="submit">Modificar datos</button>
        <button type="reset"  onclick="location.href='<?= 'index.php'; ?>'">Borrar formulario</button>
    </div>
    <a href="index.php">Volver a inicio</a>
</form>