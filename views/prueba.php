<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="img/logo.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="footer/footer.css">
	<link rel="stylesheet" href="prueba.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"> 
    <title>ZUKA S.A.C.</title>
</head>
   



<h1>Compra de comida online</h1>

<!-- Tabla - Productos del Carrito -->
<div class="tabla-calculo" id="tabla-calculo">
  <table class="tabla">
    <caption class="titulo-tabla">Productos en el carrito</caption>
    <thead class="cabecera border-top-right">
      <tr>
        <th class="border-top-left">Nombre Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th class="border-top-right">Precio Total</th>
      </tr>
    </thead>
    <tbody id="carrito-body">

    </tbody>
    <tfoot id="footer">
      <tr><td class="border-bottom-left border-bottom-right" colspan = 4>¡No hay ningun elemento en el carrito!</td></tr>
    </tfoot>
  </table>
</div>
<!-- Template de las filas -->
<template id="agregar-producto-al-carro">
  <tr>
        <td id="producto">Papas Fritas</td>
        <td><button id="menos-cantidad" class="button">-</button><span id="cant">1</span><button id='mas-cantidad' class="button">+</button></td>
        <td class="precio-tabla" id="precio-uni">3.50</td>
        <td class="precio-tabla" id="precio-total-prod">3.50</td>
      </tr>
</template>
<!-- Template del footer de la tabla -->
<template id="tfooter">
  <tr class="none">
    <td colspan = 2 class="border-bottom-left"><button id="vaciar-tabla" class="button">Vaciar carrito</button></td>
    <td class="negrita">Precio Total</td>
    <td id="total-a-pagar" class="precio-tabla border-bottom-right negrita">5.00</td>
  </tr>
</template>

<!-- Aqui se insertan las cards de productos con javascript-->
<div class="contenedor-productos">
  
</div>

<!-- template del producto -->
<template id="template-prod">
  <article class="cartola">
   <!-- Imagen del producto -->
   <div class="contenedor-img">
    <img src="" alt="">
   </div>
   <!-- Nombre y descripción del producto -->
   <div class="div-info">
     <h2 class="nombre-prod">Nombre Producto</h2>
     <hr class="separador">
     <p class="descripcion-prod">Descripción producto</p>
   </div>
   <!-- Precio y Agregar al carrito -->
   <div class="div-precio-boton">
      <p class="precio">precio Producto</p>
      <button class="boton">Agregar</button>
   </div>
  </article>
</template>