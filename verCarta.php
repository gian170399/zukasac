<?php
// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;
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
                    <li role="presentation"><a href="index.php">Inicio</a></li>
                    <li role="presentation" class="active"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation"><a href="Pagos.php">Pagar</a></li>
                    <li role="presentation"><a href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript">ConfiguroWeb</a></li>
                </ul>
            </div>

            <div class="panel-body">


                <h1>Carrito de compras</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($cart->total_items() > 0) {
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <tr>
                                    <td><?php echo $item["titulo"]; ?></td>
                                    <td><?php echo 'S/.' . $item["precio"]; ?></td>
                                    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                                    <td><?php echo 'S/.' . $item["subtotal"] ; ?></td>
                                    <td>
                                        <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">
                                    <p>No has solicitado ningún producto.....</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Volver a la tienda</a></td>
                            <td colspan="2"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo 'S/.' . $cart->total(); ?></strong></td>
                                <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
        <!--Panek cierra-->

    </div>

    
</body>

</html>