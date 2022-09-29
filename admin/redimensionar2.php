if (isset($_FILES["in_subir"])){
    $nombre = $_FILES["in_subir"]["name"];

    list($ancho, $alto) = getimagesize($nombre)

    // Verifica caracteres no compatibles
    $charset = "UTF-8";
    $nombre = iconv($charset, "ASCII//TRANSLIT", $nombre);
    $nombre = preg_replace("/[^A-Za-z0-9.\-_]/", '-', $nombre);

    // Guarda la imagen en el tamaño original
    move_uploaded_file($_FILES["in_subir"]["tmp_name"], "../galeria/" . $nombre);

    /* Redimensionar 30 % */

    $porcentaje_redimension = 30

    // Asigno el nuevo ancho y alto en proporcion al porcentaje que quiero redimensionar
    $nuevo_ancho = floor(($ancho * $porcentaje_redimension) / 100);
    $nuevo_alto = floor(($alto * $porcentaje_redimension) / 100);

    // Asigno al constructor la ruta de la imagen original
    $nueva_imagen = new redimensionar("../galeria/" . $nombre);

    // Le indico el nuevo alto y ancho de la imagen
    $nueva_imagen->imagen_redimensionada($nuevo_ancho, $nuevo_alto);

    // La guardo en otra ubicacion, en este caso una carpeta de miniatura
    $nueva_imagen->grabar_imagen("../galeria/min/" . $nombre, 100);
}
else {
    echo "Ocurrio un error al intentar subir la imagen.";
    exit();
}