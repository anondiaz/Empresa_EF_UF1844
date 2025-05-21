<!-- ** Completa esto ** -->
<h2>Formulario para añadir persona</h2>
<form action="controladores/insert_person.php" method="get">
    <div>
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
        <select name="departamento" id="departamento">
            <option value="direccion" selected>Dirección</option>
            <option value="contabilidad">Contabilidad</option>
            <option value="ventas">Ventas</option>
            <option value="programacion">Programación</option>
        </select>
    </div>
    <div class="buttons">
        <button type="submit">Añadir persona</button>
        <button type="reset">Borrar formulario</button>
    </div>
    
</form>