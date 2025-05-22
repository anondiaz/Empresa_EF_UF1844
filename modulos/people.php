<!-- ** Aquí falta introducir el código para crear la "card" con la imagen y los datos de la persona -->

<!-- En el href de la card, se envían los datos de la persona a modificar
Añadimos las variables necesarias de las que se han obtenido del array generado con el select  -->
<a href="index.php?formulario=modificar&id=<?= $fila['id_persona'] ?>&nombre=<?= $fila['nombre_persona']?>&apellidos=<?= $fila['apellido_persona']?>&email=<?= $fila['email']?>&departamento=<?= $fila['departamento']?>">
<!-- Creamos la card con los datos de la persona
Se añade el color del departamento al borde de la card -->
    <div class="card" style="border: 2px solid <?= $fila['color_departamento']?>">
<!-- Para cargar la imagen de la persona, se utiliza el nombre y apellidos de la persona
Se utiliza strtolower para que no haya problemas con mayúsculas y minúsculas -->
        <img src="img/<?= strtolower($fila['nombre_persona'] . "." . $fila['apellido_persona'])?>.png" alt="Foto de <?= $fila['nombre_persona'] . " " . $fila['apellido_persona']?>">
<!-- Se añade el nombre y apellidos de la persona -->
        <p class="nombre"><?= $fila['nombre_persona'] . " " . $fila['apellido_persona']?></p>
<!-- Se añade el email de la persona -->
        <p class="email"><?= $fila['email']?></p>
    </div>
</a>