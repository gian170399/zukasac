<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
require '../archivos/funciones.php';
comprobarSesion();
// $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');
$conexion = conexion('zuka','root','');
if (!$conexion) {
	// Terminamos con la ejecucion de la pagina si no pudimos conectar.
	// Normalmente lo que hariamos es redirigir a una pagina de error.
	die();
}

if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){
	// print_r($_FILES);
	$titulo = limpiarDatos($_POST['titulo']);
	$breveDesc =limpiarDatos($_POST['breveDesc']);
	$categoria=$_POST['categoria'];
	$descripcion=limpiarDatos($_POST['descripcion']);
	$imagen=$_FILES['foto']['name'];
	$precio=limpiarDatos($_POST['precio']);

	$carpeta_destino='../fotos/';
	$archivo_subido= $carpeta_destino . $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

	$statement = $conexion->prepare('INSERT INTO producto (titulo, breveDesc, categoria, descripcion, imagen, precio) VALUES (:titulo, :breveDesc, :categoria, :descripcion, :imagen, :precio)');
		$statement->execute(array(
			':titulo'=>$titulo,
			':breveDesc'=>$breveDesc,
			':categoria'=>$categoria,
			':descripcion'=>$descripcion,
			':imagen'=>$imagen,
			':precio'=>$precio
		));
		//header("Location: modificar.php");
	$subido= "El producto se publicó correctamente";
}

require '../views/subir.view.php';
?>