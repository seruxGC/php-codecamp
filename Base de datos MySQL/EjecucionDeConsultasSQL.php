<?php

// Coneccion BD
$mysqli = new mysqli('localhost', 'mi_usuario', 'mi_contraseña', 'mi_bd');

// Consulta SQL
$consulta_sql = 'SELECT * FROM datos_personales';

/**
 * La consulta query() devuelve:
 *
 * FALSE en caso de error.
 * Si una consulta del tipo SELECT, SHOW, DESCRIBE o EXPLAIN es
 * exitosa, mysqli_query() retornará un objeto mysqli_result.
 *
 * Para otras consultas exitosas de mysqli_query() retornará
 * TRUE.
 */

$mysqli->query($consulta_sql);

/**
 * En este caso al ser una consulta select tendremos que guardar
 * el objeto devuelto (mysqli_result) en una variable
 * 
 * $resultado = $mysqli->query($consulta_sql);
 * 
 * Es buena practica liberar luego de la memoria la informacion
 * de la variable $resultado con:
 * 
 * $resultado->free();
 */

 $mysqli->close();