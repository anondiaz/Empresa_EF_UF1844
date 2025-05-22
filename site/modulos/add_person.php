<!-- ** Completa esto ** -->
<h2>Formulario para añadir persona</h2>
<!-- Añadimos el formulario para añadir una persona
Se añade el action para que al pulsar el botón se envíe la petición a insert_person.php -->
<form action="controladores/insert_person.php" method="get">
    <div>
        <!-- Se añade un input para cada dato de la BBDD -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>
    </div>
    <div>
        <label for="contraseña">Password:</label>
        <input type="password" name="contraseña" id="contraseña" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="departamento">Departamento:</label>
        <!-- Creamos un select con los departamentos, está pendiente cargar los datos desde BBDD -->
        <select name="departamento" id="departamento">
            <!-- TO-DO sacar los datos de BBDD -->
            <option value="direccion" selected>Dirección</option>
            <option value="contabilidad">Contabilidad</option>
            <option value="ventas">Ventas</option>
            <option value="programacion">Programación</option>
        </select>
    </div>
    <div class="buttons">
        <!-- Añadimos el botón para guardar los datos de la nueva persona -->
        <button type="submit">Añadir persona</button>
        <!-- Y el de borrar el formulario -->
        <button type="reset">Borrar formulario</button>
    </div>
    
</form>