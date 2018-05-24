<?php
/**
 * Si la aplicación no captura la excepción lanzada por el constructor de PDO, la acción predeterminada 
 * que toma el motor zend es la de finalizar el script y mostrar información de seguimiento. 
 * 
 * Esta información probablemente revelará todos los detalles de la conexión a la base de datos, 
 * incluyendo el nombre de usuario y la contraseña
 */
try {
    $conexion = new PDO('mysql:host=localhost;dbname=pruebas;charset=UTF8', 'root', 'Carlos.12');
    
    // Recomendado para evitar inyeccion de sql
    $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    // Recomendado para obtener todos los errores en el cath
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparacion de sentencia
    $stmt = $conexion->prepare('INSERT INTO datos_personales (NIF,NOMBRE,APELLIDO,EDAD,DIRECCION) '
        . 'VALUES(:nif, :nombre, :apellido, :edad, :direccion)');

    // Asociacion de parametros
    $nif = '54321UNO';
    $nombre = 'Conexion';
    $apellido = 'PDO';
    $edad = 26;
    $direccion = 'MSI';

    // Ejecución de la sentencia preparada
    $stmt->execute(
        array(
            ':nif' => $nif,
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':edad' => $edad,
            ':direccion' => $direccion
    ));

    // Liberar sentencia y Cerrar conexion
    $stmt = null;
    $conexion = null;
} catch (PDOException $e) {
    die('Error en la conecion ' . $e->getMessage());
}

/**
 * Obtencion de resutlados en una sentencia SELECT
 */
$conexion2 = new PDO('mysql:host=localhost;dbname=pruebas;charset=UTF8', 'root', 'Carlos.12');

$stmt2 = $conexion2->prepare('SELECT * FROM datos_personales WHERE NIF = :nif');
$stmt2->bindParam(':nif', $nif);
$stmt2->execute();

$row = $stmt2->fetchObject();

echo "Datos obtenidos: $row->NIF  $row->NOMBRE $row->APELLIDO $row->EDAD $row->DIRECCION";

$stmt2 = null;
$conexion2 = null;


//   Asociacion de parametros alternativas
//   
//   ALTERNATIVA 1
//   
//     $stmt = $conexion->prepare('INSERT INTO datos_personales (NIF,NOMBRE,APELLIDO,EDAD,DIRECCION) '
//        . 'VALUES(?,?,?,?,?)');
//        
//     $stmt->execute(array($nif, $nombre, $apelido, $edad, $direccion));
//   
//   
//   ALTERNATIVA 2
//   
//     $stmt = $conexion->prepare('INSERT INTO datos_personales (NIF,NOMBRE,APELLIDO,EDAD,DIRECCION) '
//        . 'VALUES(?,?,?,?,?)');
//
//    $stmt->bindParam(1, $nif, $conexion::PARAM_STR);
//    $stmt->bindParam(2, $nombre, $conexion::PARAM_STR);
//    $stmt->bindParam(3, $apellido, $conexion::PARAM_STR);
//    $stmt->bindParam(4, $edad, $conexion::PARAM_INT);
//    $stmt->bindParam(5, $direccion, $conexion::PARAM_STR);
//    
//    $stmt->execute();
//
//   ALTERNATIVA 3
// 
//     $stmt = $conexion->prepare('INSERT INTO datos_personales (NIF,NOMBRE,APELLIDO,EDAD,DIRECCION) '
//        . 'VALUES(:nif, :nombre, :apellido, :edad, :direccion)');
//        
//    $stmt->bindParam(':nif', $nif, $conexion::PARAM_STR);
//    $stmt->bindParam(':nombre', $nombre, $conexion::PARAM_STR);
//    $stmt->bindParam(':apellido', $apellido, $conexion::PARAM_STR);
//    $stmt->bindParam(':edad', $edad, $conexion::PARAM_INT);
//    $stmt->bindParam(':direccion', $direccion, $conexion::PARAM_STR);
//    
//    $stmt->execute();




