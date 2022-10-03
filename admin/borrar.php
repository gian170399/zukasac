<?php session_start();

require '../archivos/funciones.php';

// Comprobamos si la session esta iniciada, sino, redirigimos.
// $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');
include '../conexion.php';

$idProducto = limpiarDatos($_GET['idProducto']);

// Comprobamos que exista un ID
if (!$idProducto) {
	header('Location: modificar.php');
}

$statement = $conexion->prepare('DELETE FROM producto WHERE idProducto = :idProducto');
$statement->execute(array('idProducto' => $idProducto));


header('Location: modificar.php');

?>