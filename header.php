<?php
require_once 'connection.php';
?>
<header>
    <div>
         <h1>UF1844</h1>
<!-- Añadimos un formulario al action para que al pulsar el botón se envíe la petición -->
         <form action="index.php?formulario=anadir" method="post">
            <button type="submit">Añadir Persona</button>
         </form>
   </div>
</header>