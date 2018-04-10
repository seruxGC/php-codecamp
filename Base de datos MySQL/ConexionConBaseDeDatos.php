<?php

/**
 * Conexion a base de datos MySQL usando mysqli
 * Forma orientada a objetos
 */
$mysqli = new mysqli('localhost', 'mi_usuario', 'mi_contraseña', 'mi_bd');

/**
 * COMPROBACION DE ERRORES EN EL MOMENTO DE LA CONEXION
 * 
 * $mysqli->connect_error — Devuelve una cadena con la 
 * descripción del último error de conexión
 * 
 * $mysqli->connect_errno  — Devuelve el código de error de la 
 * última llamada
 */
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}



/**
 * RECOMENDACION
 * 
 * Please do use set_charset("utf8") after establishing the 
 * connection if you want to avoid weird string issues.
 * 
 * // Cambiar el conjunto de caracteres a utf8 (set_charset())
 * // Devuelve TRUE en caso de éxito o FALSE en caso de error.
 * 
 * $mysqli->set_charset("utf8")
 */

$mysqli->close();