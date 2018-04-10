<?php

$conexion_BD = new mysqli('localhost','root','Carlos.12','pruebas');

if($conexion_BD->connect_error){
    die('Error de Conexión (' . $conexion_BD->connect_errno . ') '
    . $conexion_BD->connect_error);
}

echo 'Éxito... ' . $conexion_BD->host_info . "<br><br>";

$consulta_sql = 'SELECT * FROM datos_personales';

/** La consulta query() devuelve:
 *  
 * FALSE en caso de error. 
 * Si una consulta del tipo SELECT, SHOW, DESCRIBE o EXPLAIN es
 * exitosa, mysqli_query() retornará un objeto mysqli_result.
 *  
 * Para otras consultas exitosas de mysqli_query() retornará 
 * TRUE.
 */
$resultado = $conexion_BD->query($consulta_sql);

/**
 * Almacenar todos 
 */
while($fila = $resultado->fetch_assoc()){
    echo 'DNI: '.  $fila['NIF'] . 
         ' Nombre: ' . $fila['NOMBRE'] .
         ' Apellido: ' . $fila['APELLIDO'] .
         ' Edad: ' . $fila['EDAD'] .
         ' Direccion: ' . $fila['DIRECCION'] .
         '<br>';
}

// Cambia la codificacion a utf8 e imprime la que usa actualmente
$conexion_BD->set_charset('utf8');
echo $conexion_BD->character_set_name();

// Liberar el conjunto de resultados 
$resultado->free();

// Cerrar conexion
$conexion_BD->close();
