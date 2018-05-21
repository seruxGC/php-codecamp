<?php

$conexion = new mysqli('localhost', 'root', 'Carlos.12', 'pruebas');

if ($conexion->connect_error) {
    die('Error de conexion: ' . $conexion->connect_error);
}

$consulta = 'SELECT * FROM datos_personales';
$resulset = $conexion->query($consulta);

while($row = $resulset->fetch_object()){
    echo 'Nombre: ' . $row->NOMBRE . '<br>';
    echo 'DNI: ' . $row->NIF . '<br>';
    echo 'Edad: ' . $row->EDAD . '<br>';
    echo 'Direccion: ' . $row->DIRECCION . '<br><br>';
}
$resulset->free();
$conexion->close();
