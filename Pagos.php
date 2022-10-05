<?php
// include database configuration file
include 'pruebaconexion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if ($cart->total_items() <= 0) {
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM clientes WHERE idCliente = " . $_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
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
                    <li role="presentation"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation" class="active"><a href="Pagos.php">Pagar</a></li>
                    <li role="presentation"><a href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript">ConfiguroWeb</a></li>
                </ul>
            </div>

            <div class="panel-body">
                <h1>Vista previa de la Orden</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Pricio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
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
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo 'S/.' . $item["subtotal"]; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="4">
                                    <p>No hay articulos en tu carta......</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo 'S/.' . $cart->total(); ?></strong></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
                <div class="shipAddr">
                    <h4>Detalles de envío</h4>
                    <p><?php echo $custRow['name']; ?></p>
                    <p><?php echo $custRow['email']; ?></p>
                    <p><?php echo $custRow['phone']; ?></p>
                    <p><?php echo $custRow['address']; ?></p>
                </div>
                <div class="footBtn">
                    <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
                    
                    <a href="creditcardpage/creditcard.php" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
                    
                    <!-- <a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a> -->
                </div>
            </div>
        </div>
        <!--Panek cierra-->
    </div>

    
</body>

</html>