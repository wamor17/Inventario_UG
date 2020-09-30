<?php

    // Declaramos las variables de conexión
    $ServerName = "localhost";
    $Username = "root";
    $Password = "Utn&Cbo&V1";
    $NameBD = "inventarioUG";

    // Creamos la conexión con MySQL
    $conexion = new mysqli($ServerName, $Username, $Password, $NameBD);

    // Revisamos la Conexión MySQL
    if ($conexion->connect_error) {
        die("Ha fallado la conexión: " . $conexion->connect_error);
    }

    // Enviamos un mensaje de conexión correcta
    echo "Conectado correctamente";
//    */

?>