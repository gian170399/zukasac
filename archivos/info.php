<?php
    require '../archivos/funciones.php';
    
    // $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');
    include '../conexion.php';

    $idProducto= isset($_GET['idProducto']) ? (int)$_GET['idProducto'] : false;

    if(!$idProducto){
        header('Location: ../index.php');
    }

    $statement = $conexion->prepare('SELECT * FROM Producto WHERE idProducto= :idProducto');
    $statement->execute(array(':idProducto'=> $idProducto));

    $foto = $statement->fetch();

    if(!$foto){
        header('Location: ../index.php');
    }
    
    require '../views/info.view.php';
    
?>