<!-- Crear un formulario de login y visulizar la información en pantalla
Los campos del formulario serán usuario y contrasena
El formulario enviará la información por POST.
Al principio hacer la prueba con GET para ver cómo se envían los parámetros.
Página de login ejercicio01Login.html
PHP del servidor ejercicio 01 Login.php -->
<?php
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña: " . $contrasena . "<br>";
?>
