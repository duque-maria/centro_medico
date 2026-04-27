<?php
    // script para crear ua coexión con la BD

    // Parametros requeridos para la conexión con la BD

    // Parametros BD Locasl -  Constantes
    /* define('USER', 'mduque'); // Crea la constante USER con valor 'root'
    // define('PW', '12345');
    // define('HOST', 'localhost');
    // define('BD', 'centro_medico'); */

    // Parametros BD remota (inifinityfree)
    define('USER', 'if0_41713180'); // Crea la constante USER con el valor 'root'
    define('PW', 'duque2026'); 
    define('HOST', 'localhost'); 
    define('BD', 'centro_medico');

    // Conexión con la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD);

    // Establecer conexion con la base de datos
    mysqli_set_charset($conexion, "utf8mb4");

    // Verificar si la conexión fue exitosa
    if (!$conexion) 
    {
        die("La conexion con la BD fallo: " . mysqli_connect_error($conexion));
    }
    else
    {
        die ("Conexion exitosa con la BD!");
    }

?>
