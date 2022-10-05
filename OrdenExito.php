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
    <div class="panel panel-default">
      <div class="panel-heading">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="index.php">Volver</a></li>
          <li role="presentation"><a href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript">ConfiguroWeb</a></li>
        </ul>
      </div>

      <div class="panel-body">
        <script>Swal.fire(
              '¡Pedido Confirmado!',
              'Recuerde que demora entre 48 a 72 hs en aprobarse. Cualquier consulta contacte al comercial.',
              'success'
        )</script>

        <h1>Estado de tu Requerimiento</h1>
        <p>La Orden se ha enviado exitósamente. El ID de tu pedido es <?php echo $_GET['id']; ?></p>
      </div>
    </div>
    <!--Panek cierra-->
  </div>
</body>

</html>