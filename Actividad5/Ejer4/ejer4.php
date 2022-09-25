<?php
    $user = "anass";
    $pass = "1234";
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if (password_verify($contrasena, $password)) {
        echo "El Usuario: " . $usuario ;
        echo " con su Contraseña: " . $contrasena . "ha logueado correctamente <br>";
    } else {
        echo "Usuario o Contraseña incorrecta";
        echo "<a href="ejer4.html" >Volver al formulario</a>";

    }
?>




