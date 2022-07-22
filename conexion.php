<?php
    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $base_de_datos = "notas";
    $mysqli = new mysqli($host,$usuario,$contraseña,$base_de_datos);
    if($mysqli->connect_errno) {
        echo "fallo en la conexion de mysql: (".$mysqli->connect_errno,")".$mysqli->error;
    }
?>


