<?php 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $aficiones = $_POST['aficiones'];


    // Comprobar que los datos no son vacíos
    if(empty ($nombre)) echo "<p style='color:red'>El nombre no puede estar vacío</p> ";
    else echo "<p>Nombre:<b> $nombre</b></p> ";
    if(empty ($apellidos)) echo "<p style='color:red'> los apellidos no pueden estar vacíos</p> ";
    else echo "<p>Apellidos:<b> $apellidos</b></p> ";
    if(empty ($edad)) echo "<p style='color:red'> La edad no puede estar vacía</p> ";
    else echo "<p>Edad:<b> $edad</b></p> ";
    if(empty ($peso)) echo "<p style='color:red'> El peso no puede estar vacío</p> ";
    else echo "<p>Peso:<b> $peso</b></p> ";
    if(empty ($sexo)) echo "<p style='color:red'> El sexo no puede estar vacío </p> ";
    else echo "<p>Sexo:<b> $sexo</b></p> ";
    if(empty ($estado)) echo "<p style='color:red'> El estado no puede estar vacío</p> ";
    else echo "<p>Estado:<b> $estado</b></p> ";
    if(empty ($aficiones)) echo "<p style='color:red'>Las aficiones no pueden estar vacías</p> ";
    else {
        echo "Aficiones: ";
        foreach ($aficiones as $aficion) {
            echo $aficion . ", ";
        }
    }

echo "<br><br><a href='datos.html' >Volver al formulario</a>";

?>