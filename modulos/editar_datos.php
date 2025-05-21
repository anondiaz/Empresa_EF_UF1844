<!-- ** Completa esto ** -->
<?php
include_once 'controladores/departamentos.php';

// Comprobamos la recepción de los datos del fichero
// print_r($array_departamentos);
// echo "<br>"."--------------------"."<br>";

// print_r($_GET);
// echo "<br>"."--------------------"."<br>";
// echo $fila['id_persona'];
// echo "<br>"."--------------------"."<br>";

?>

<h2>Modificar persona</h2>
<form action="controladores/modify_data.php" method="post">
    <input type="text" name="id" value="<?= $_GET['id'] ?>" hidden >
    <div>
        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre"  value="<?= $_GET['nombre'] ?>" required>
    </div>
    <div>
        <label for="apellidos">Apellidos :</label>
        <input type="text" name="apellidos" id="apellidos" value="<?= $_GET['apellidos'] ?>" required>
    </div>
    <div>
        <label for="contraseña">Contraseña :</label>
        <input type="password" name="contraseña" id="contraseña" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" value="<?= $_GET['email'] ?>">
    </div>
    <div>
        <label for="departamento">Departamento :</label>
        <select name="departamento" id="departamento">
            <option value="direccion" selected>direccion</option>
            <option value="contabilidad">contabilidad</option>
            <option value="ventas">ventas</option>
            <option value="programacion">programacion</option>
        </select>
    </div>
        <div class="buttons">
        <button type="submit">Modificar datos</button>
        <button type="reset"  onclick="location.href='<?= 'index.php'; ?>'">Borrar formulario</button>
    </div>
</form>