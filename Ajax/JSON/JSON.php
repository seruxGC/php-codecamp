<?php
try{
    
        
    $pdo = new PDO('mysql:host=localhost;dbname=pruebas;charset=UTF8', 'root', 'Carlos.12');
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare('select empresas,dirección from clientes');
    
    $stmt->execute();
    $resulsetOBJ = $stmt->fetchAll(PDO::FETCH_OBJ);
    
    $stmt = null;
    $pdo = null;
    
    echo json_encode($resulsetOBJ);
    
    
    
} catch (PDOException $e) {

    die('Error de conexion' . $e->getMessage());
    

}