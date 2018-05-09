<?php

$conn = new mysqli('localhost', 'root', 'Carlos.12', 'pruebas');

if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_error);
}

$consulta = 'SELECT * FROM datos_personales';
$resulset = $conn->query($consulta);

while($row = $resulset->fetch_object()){
    echo 'Nombre: ' . $row->NOMBRE . '<br>';
    echo 'DNI: ' . $row->NIF . '<br>';
    echo 'Edad: ' . $row->EDAD . '<br>';
    echo 'Direccion: ' . $row->DIRECCION . '<br><br>';
}
$resulset->free();
$conn->close();
