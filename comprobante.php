<?php
if (!isset($_REQUEST['id'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        /* .container {
            padding: 20px;
        }

        input[type="number"] {
            width: 20%;
        } */
        .table td{
            vertical-align: middle;
        }
    </style>
    <script>
        function updateCartItem(obj, id) {
            $.get("cartAction.php", {
                action: "updateCartItem",
                id: id,
                qty: obj.value
            }, function(data) {
                if (data == 'ok') {
                    location.reload();
                } else {
                    alert('Cart update failed, please try again.');
                }
            });
        }
    </script>
</head>
</head>

<body>
        <nav class="navbar fixed-top navbar-expand-lg navbar bg scrolling-navbar"  style="background-color: #FFFFFF;">

        <div class="container">
            <a href="index.php" class="navbar-brand" style="color: black;"> ZUKA S.A.C.</a>

            <button class="navbar-toggler black" style="color: black;" 
            type="button" data-toggle="collapse" 
            data-target="#navegacion" 
            aria-expanded="false" 
            aria-label="Alternar Menu">
                <span class="navbar-toggler-icon black" style="color: black;"> <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
            </button>

            <div class="collapse navbar-collapse" 
            id="navegacion">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link" style="color: black">Inicio <i class="fa fa-refresh fa-spin fa-fw"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#"  style="color: black"
                        class="nav-link dropdown-toggle"
                        id="navbarDropdown"
                        data-toggle="dropdown">
                            Categoria
                        </a>
                        <div class="dropdown-menu"
                        aria-labelledby="navbarDropdown">
                            <a href="categorias/backend/faro.php" class="dropdown-item">Faros</a>
                            <a href="categorias/backend/neblinero.php" class="dropdown-item">Neblineros</a>
                            <a href="categorias/backend/foco.php" class="dropdown-item">Focos</a>
                            <a href="categorias/backend/aro.php" class="dropdown-item">Aros</a>
                            <a href="categorias/backend/equipo.php" class="dropdown-item">Equipos</a>
                            <a href="categorias/backend/parlante.php" class="dropdown-item">Parlantes</a>
                            <a href="categorias/backend/piso.php" class="dropdown-item">Pisos</a>
                            <a href="categorias/backend/asiento.php" class="dropdown-item">Asientos</a>
                            <a href="categorias/backend/sirena.php" class="dropdown-item">Sirenas</a>
                            <!-- <a href="categorias/backend/accesorio.php" class="dropdown-item">Accesorios</a> -->
                            <a href="404/404.php" class="dropdown-item">Accesorios</a>
                        </div>
                    </li>
                </ul>

                <form action="archivos/buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
                    <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
                    <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                </form>
                
                <a href="VerCarta.php" class="btn btn-outline-dark ml-lg-5 "><i class="fas fa-shopping-cart"></i> Carrito</a>
                <a href="admin/login.php" class="btn btn-outline-success ml-lg-5 "><i class="fa fa-user" aria-hidden="true"></i> Mi cuenta</a>
            </div>
        </div>
    </nav>
    <div class="container">
  
  <div class="row header">
    <div class="arrow-right"></div>
    <h1 class="title">FACTURĂ</h1>
    <div class="col-12 text-right pr-5 pt-4">
      <img class="logo" height="125px" width="125px" src="https://roundpeg.biz/wp-content/uploads/2013/12/Chase.png" />
    </div>
    <div class="rectangle"></div>
    <div class="shape"></div>
  </div>
  <div class="row invoice-content">
    <div class="col-4 pl-5">
      <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> ZUKA SAC</h5>
      <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> (+012) 345 6789</h5>
      <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> zuka@info.com</h5>
    </div>
    
    <div class="col-4 offset-4 text-right pr-5 pt-3">
      <h4>Factura<strong>#1</strong></h4>
      <h4>Emitida<strong> 01 Oct. 2022</strong></h4>
    </div>
  </div>
  
  <div class="row invoiced-details">
    <div class="col-8 invoiced-to p-5">
      <h3><u>Emitido a</u></h3>
      <h6><strong>Giancarlo Ruiz</strong></h6>
      <h6>+51 922629024</h6>
      <h6>nombre de la calle 1465<br />Lima, Peru</h6>
    </div>
    
    <div class="col-4 p-5 text-right">
      <h3>La Orden se ha enviado exitósamente. El ID de tu pedido es</h3>
      <h4><strong><?php echo $_GET['id']; ?></strong></h4>
    </div>
  </div>
  
  <div class="row background">
    <table class="table">
      <thead class="thead-blue">
        <tr>
          <th scope="col">Nr.</th>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Descuento</th>
          <th scope="col">Suma</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>(Nombre del producto)</td>
          <td>1</td>
          <td>200 <span class="curency"></span></td>
          <td>Sin Descuento</td>
          <td>190 <span class="curency">&dollar;</span></td>
        </tr>
        
        <tr>
          <td colspan="3" class="empty"></td>
          <td colspan="2"><h5><strong>SUBTOTAL</strong></h5></td>
          <td><h5><strong>960 <span class="curency"></span></strong></h5></td>
        </tr>
        <tr>
          <td colspan="3" class="empty"></td>
          <td colspan="2"><h5><strong>IGV 18%</strong></h5></td>
          <td><h5><strong>144 <span class="curency"></span></strong></h5></td>
        </tr>
        <tr class="total">
          <td colspan="3" class="empty"></td>
          <td colspan="2" class="total"><h4><strong>TOTAL</strong></h4></td>
          <td class="total-value"><h4><strong>816 <span class="curency"></span></strong></h4></td>
        </tr>
      </tbody>
    </table>
  </div>
  
  
</body>

</html>