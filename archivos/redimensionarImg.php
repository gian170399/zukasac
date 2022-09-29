<?php

class redimensionar {

    private $imagen;
    private $ancho;
    private $alto;
    private $nueva_imagen;

    public function __construct ($nombre_archivo) {
        $this->imagen = $this->abrir_imagen($nombre_archivo);
        $this->ancho = imagesx($this->imagen);
        $this->alto = imagesy($this->imagen);
    }

    public function abrir_imagen($archivo) {
        $matriz_ext = explode(".", $archivo);
        $tipo_extension = end($matriz_ext);
        $tipo_extension = strtolower($tipo_extension);
        switch($tipo_extension) {
            case "jpg":
            case "jpeg":
                $tipo_archivo = imagecreatefromjpeg($archivo);
            break;
            case "gif":
                $tipo_archivo = imagecreatefromgif($archivo);
            break;
            case "png":
                $tipo_archivo = imagecreatefrompng($archivo);
            break;
        }
        return $tipo_archivo;
    }

    public function imagen_redimensionada($nuevo_ancho, $nuevo_alto) {

            // imagen tamano fijo
            $ancho_fijo = $nuevo_ancho;
            $alto_fijo = $nuevo_alto;

            $rango_ancho = $nuevo_ancho / $this->ancho;
            $rango_alto = $nuevo_alto / $this->alto;
            $rango = min($rango_alto, $rango_ancho);
            $nuevo_ancho = intval($rango * $this->ancho);
            $nuevo_alto = intval($rango * $this->alto);

            $this->nueva_imagen = @imagecreatetruecolor($nuevo_ancho, $nuevo_alto) or die("Error al crear la imagen.");
            imagecopyresampled($this->nueva_imagen, $this->imagen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $this->ancho, $this->alto);

        }

    public function grabar_imagen($ruta, $calidad="100") {
            $matriz_ext = explode(".", $ruta);
            $tipo_extension = end($matriz_ext);
            $tipo_extension = strtolower($tipo_extension);

            switch($tipo_extension)
            {
                case "jpg":
                case "jpeg":
                    if (imagetypes() & IMG_JPG) {
                        imagejpeg($this->nueva_imagen, $ruta, $calidad);
                    }
                break;
                case "gif":
                    if (imagetypes() & IMG_GIF) {
                        imagegif($this->nueva_imagen, $ruta);
                    }
                break;
                case "png":
                    $calidad_png = round(($calidad/100) * 9);
                    $calidad_invertida = 9 - $calidad_png;

                    if (imagetypes() & IMG_PNG) {
                         imagepng($this->nueva_imagen, $ruta, $calidad_invertida);
                    }
                    break;
                default:
                    //Archivo no compatible
                break;
            }

            imagedestroy($this->nueva_imagen);
        }       
    }
?>