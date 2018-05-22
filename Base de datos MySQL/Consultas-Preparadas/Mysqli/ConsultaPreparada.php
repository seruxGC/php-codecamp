<?php

$conexion = new mysqli('localhost', 'root', 'Carlos.12', 'Pruebas');

if($conexion->errno){
    die('Error al conectarse ' . $conexion->error);
}

/** SENTENCIAS PREPARADAS
 * 
 * Los marcadores son legales solo en ciertos lugares en las sentencias SQL. Por ejemplo, se les 
 * permite en la lista VALUES() de una sentencia INSERT (para especificar valores de columna para una 
 * fila), o en una comparación con una columna en una cláusula WHERE para especificar un valor de comparación.
 * 
 * Sin embargo, no se les permite para identificadores (como nombres de tabla o columna), en la lista de
 * selección que nombra las columnas que se devuelven mediante una sentencia SELECT, o para especificar 
 * ambos operandos de un operador binario como el signo de igualdad =. 
 * 
 * Esta última restricción es necesaria 
 * debido a que sería imposible determinar el tipo de parámetro. Tampoco está permitido comparar un marcador con 
 * NULL mediante ? IS NULL. En general, los parámetros son legales solamente en sentencias del Lenguaje de 
 * Manipulación de Datos (DML) y no en sentencias del Lenguaje de Definición de Datos (DDL).
 * 
 * Paso 1: Preparar sentencia
 */
$stmt = $conexion->prepare('INSERT INTO datos_personales(NIF,NOMBRE,APELLIDO,EDAD,DIRECCION ) VALUES(?,?,?,?,?)'); // Devuelve false en caso de error

/**
 * Paso 2: Vincular parametros
 * 
 * i 	la variable correspondiente es de tipo entero
 * d	la variable correspondiente es de tipo double
 * s	la variable correspondiente es de tipo string
 * b	la variable correspondiente es un blob y se envía en paquetes
 */
$stmt->bind_param('sssis', $nif, $nombre, $apellido, $edad, $direccion); // Devuelve false en caso de error

$nif = '1234ABCD';
$nombre = 'Sentencia';
$apellido = 'preparada';
$edad = 26;
$direccion = 'Telde';

/**
 *  Paso 3: Ejecutar sentencia
 */
$stmt->execute(); // Devuelve false en caso de error

/**
 * Paso 4: Cerrar la consulta
 */
$stmt->close();



/**
 * Obtencion de resutlados en una sentencia SELECT
 */
$stmt2 = $conexion->prepare('SELECT * FROM datos_personales WHERE NIF = ?');
$stmt2->bind_param('s', $nif);
$stmt2->execute();

$resulset = $stmt2->get_result();

$row = $resulset->fetch_object();

echo "Datos obtenidos: $row->NIF  $row->NOMBRE $row->APELLIDO $row->EDAD $row->DIRECCION";

$stmt2->close();
$conexion->close();




