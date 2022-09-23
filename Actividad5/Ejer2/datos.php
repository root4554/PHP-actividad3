<?php 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $aficiones = $_POST['aficiones'];

    // Comprobar que los datos no son vacíos
    if(empty ($nombre)) echo "El nombre no puede estar vacío <br>";
    if(empty ($apellidos)) echo "Los apellidos no pueden estar vacíos <br>";
    if(empty ($edad)) echo "La edad no puede estar vacía <br>";
    if(empty ($peso)) echo "El peso no puede estar vacío <br>";
    if(empty ($sexo)) echo "El sexo no puede estar vacío <br>";
    if(empty ($estado)) echo "El estado no puede estar vacío <br>";
    if(empty ($aficiones)) echo "Las aficiones no pueden estar vacías <br>";


    echo "Nombre: " . $nombre . "<br>";
    echo "Apellidos: " . $apellidos . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Peso: " . $peso . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Estado: " . $estado . "<br>";
    //echo "Afeciones: " . $afeciones . "<br>";
foreach ($aficiones as $aficion) {
    echo $aficion . ", ";
}

?>