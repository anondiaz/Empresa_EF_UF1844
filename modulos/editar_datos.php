<!-- ** Completa esto ** -->
<?php
include_once 'controladores/departamentos.php';

?>

<h2>Formulario para modificar persona</h2>
<!-- Añadimos el formulario para modificar los datos de la persona
Se añade el action para que al pulsar el botón se envíe la petición a modify_data.php -->
<form action="controladores/modify_data.php" method="post">
    <!-- Se añade el id de la persona para poder modificar los datos
     Lo dejamos oculto ya que no es necesario que sea visible -->
    <input type="text" name="id" value="<?= $_GET['id'] ?>" hidden >
    <div>
        <!-- En cada input se añade el valor de la persona que se va a modificar a traves del GET -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"  value="<?= $_GET['nombre'] ?>" required>
    </div>
    <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" value="<?= $_GET['apellidos'] ?>" required>
    </div>
    <div>
        <!-- En el caso de la contraseña se deja en blanco y se indica que se debe actualizar -->
        <label for="contraseña">La contraseña debe ser actualizada:</label>
        <input type="password" name="contraseña" id="contraseña" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $_GET['email'] ?>">
    </div>
    <div>
        <label for="departamento">Departamento:</label>
        <!-- Creamos un select con los departamentos, está pendiente cargar los datos desde BBDD -->
        <select name="departamento" id="departamento">
            <!-- TO-DO sacar los datos de BBDD  -->
            <option value="direccion" selected>Dirección</option>
            <option value="contabilidad">Contabilidad</option>
            <option value="ventas">Ventas</option>
            <option value="programacion">Programación</option>
        </select>
    </div>
        <div class="buttons">
        <!-- Añadimos el botón para guardar los datos modificados de la persona -->
        <button type="submit">Modificar datos</button>
        <!-- Se añade el onclick para que al pulsar el botón se borre el formulario -->
        <button type="reset"  onclick="location.href='<?= 'index.php'; ?>'">Borrar formulario</button>
    </div>
</form>