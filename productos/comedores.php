<?php
    require '../archivos/funciones.php';
    //$fotos_por_pagina = 8;
    // $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');
    $conexion = conexion('may08mud_muebleria','root','');
    if(!$conexion){
	    die();
    }

    $statement = $conexion->prepare("SELECT * FROM productos WHERE categoria = 'comedores'");
    $statement->execute();
    $resultado_comedor = $statement->fetchAll();

    if (empty($resultado_comedor)) {
        $titulo = 'No hay articulos disponibles en "Comedores"' ;
    } else {
        $titulo = 'Comedores';
    }

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    // Establecemos cuantos post por pagina queremos cargar.
    $postPorPagina = 8;

    // Revisamos desde que articulo vamos a cargar, dependiendo de la pagina en la que se encuentre el usuario.
    # Comprobamos si la pagina en la que esta es mayor a 1, sino entonces cargamos desde el articulo 0.
    # Si la pagina es mayor a 1 entonces hacemos un calculo para saber desde que post cargaremos.
    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;

    // Preparamos la consulta SQL
    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos WHERE categoria = 'comedores' ORDER BY id DESC  LIMIT $inicio, $postPorPagina");

    // Ejecutamos la consulta
    $statement->execute();
    $resultado_comedor = $statement->fetchAll();

    // Comprobamos que haya articulos, sino entonces redirigimos.
    if (empty($resultado_comedor)) {
        $titulo = 'No hay articulos disponibles en "Comedores"' ;
    } else {
        $titulo = 'Comedores';
    }

    // Calculamos el total de articulos, para despues conocer el numero de paginas de la paginacion.
    $statement = $conexion->prepare("SELECT FOUND_ROWS() as total");
    $statement->execute();
    $total_post = $statement->fetch()['total'];

    // Calculamos el numero de paginas que tendra la paginacion.
    # Para esto dividimos el total de articulos entre los post por pagina
    $numeroPaginas = ceil($total_post / $postPorPagina);
    require '../archivos/contacto.php';
    require 'comedores.view.php';
    
?>