<div class="container" >
                <div class="row">
                    <div class="col">
                        <div class="py-4 border-bottom">
                            <!-- <h1 class="text-center"><?php echo $titulo?></h1> -->
                            <h1 class="text-center" style="font-family: 'Josefin Sans', sans-serif; color: red; padding: 20px ">Nuevos Productos</h1>
                        </div>
                    </div>
                </div>

                <div class="row py-4 ">
                    <?php foreach($fotos as $foto): ?>
                        <div style="height=200px;" class="col-12 col-sm-6 col-lg-3 mb-4" >
                            <!-- <div class="card-group"> -->
                                <div  class="card shadow" style="background: url('img/fondo.png'), #fff; ">
                                        <a href="archivos/single.php?id=<?php echo $foto['idProducto']; ?>">
                                            <section class="inner imagenFav" id="imagenFav">
                                                <img  height="170px" class="card-img-top w-100  " src="fotos/<?php echo $foto['imagen'];?>">
                                                <p>agregar a Favoritos</p>
                                            </section>
                                        </a>
                                        <div class="card-body">
                                            <h3 class="card-title font-italic"><?php echo $foto['titulo']?></h3>
                                            <p class="card-text text-justify"><?php echo $foto['breveDesc']?></p>
                                            <a style=" color: black; padding: 10px; font-size:  35px">S/ <?php echo $foto['precio'];?></a>
                                            <a style="margin-top: 10px" href="archivos/single.php?id=<?php echo $foto['idProducto'];?>" class="btn btn-sm btn-info btn-block precio"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                            <div class="cta">
                                                <div class="price">$130</div>
                                                <button class="btn">Add to cart<span class="bg"></span></button>
                                            </div>    
                                        </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>






            .imagenFav img{
            width:10%;
            height:100
        }
        .imagenFav p{
            color: black;
            position: absolute;
            top:10%,
            /* top: 50%; */
            font-size: 20px;
        }
        .cta {
            padding: 20px 20px 5px;

            &::after {
            content: '';
            display: table;
            clear: both;
            }
        }













        <div class="login">
        <div class="container">
            <div class="row mt-5 pt-4">
                    <div class="col">
                        <div class="py-4 m-auto">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Iniciar Sesión</li>
                        </ol>
                    </nav>
                            <h1 class="text-center">Iniciar Sesión</h1>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 m-auto">
                    <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text mb-3"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                            <input class="form-control mb-3" type="text" name="usuario" placeholder="Usuario">
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text mb-3"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                            </div>
                            <input class="form-control mb-3" type="password" name="password" placeholder="Contraseña">
                        </div>
                        
                         <!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
                        <?php if (isset($errores)): ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="error"><?php echo $errores; ?></p>                                      
                            </div>
                        <?php endif; ?>
                        
                        <!-- <i class="submit-btn fa fa-arrow-right " onclick="login.submit()"></i> -->
                        <input type="submit" class="btn btn-success enviar mb-3" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
    </div>









    <div class="login-box">
        <h2>Iniciar Sesion</h2>
            <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="user-box">
                    <input type="text" name="usuario" required="" placeholder="Nombre de usuario">
                    
                </div>
                <div class="user-box">
                    <input type="password" name="pass" required="" placeholder="Contraseña">
                </div>
                 <!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
                 <?php if (isset($errores)): ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="error"><?php echo $errores; ?></p>                                      
                            </div>
                        <?php endif; ?>
                <!-- <a href="modificar.php" type="submit" value="Ingresar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                Submit
                </a> -->
                <input type="submit" class="btn btn-success enviar mb-3" value="Ingresar">
            </form>
    </div>


    <!-- <?php include '../frontend/cabeceraCategoria.php'?> -->

    <?php include '../frontend/contenido.php'?>












    <div class="row" >
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-3 text-center">   
                    <img src="../fotos/<?php echo $foto['imagen'];?>" alt="Responsive image" class="mt-4 img-thumbnail w-100">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4 m-auto">
                    <div class="card border-dark mb-3 mt-1" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-dark">
                        <h1 class="text-center"><?php if(!empty($foto['titulo'])){
                                echo $foto['titulo'];
                                }else{
                                    echo "sin titulo";
                                } ?>
                            </h1>
                        </div>
                            <div class="card-body text-dark">
                                <h3 class="card-title">Descripción:</h3>
                                <p class="card-text"><?php echo nl2br($foto['descripcion']);?></p>
                            </div>
                        <div class="card-footer bg-transparent border-dark">
                            <div class="col-12 col-md-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="col-12">
                                        <h4 class="card-title ">Precio: S/<?php echo $foto['precio'];?></h4>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="../AccionCarta.php?action=addToCart&idProducto=<?php echo $foto['idProducto'];?>" class="add-to-cart">Agregar al carrito</a>
                </div>
                <!-- <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a> -->
            </div>




















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
                                        <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
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






















    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <script src="https://use.fontawesome.com/8ed3a36f97.js"></script> -->
    <style>
    .titulo{
            font-family: 'Bree Serif', serif;   
        }
        .float{
            position:fixed;
            width:60px;
            height:60px;
            right:26px;
            bottom: 90px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:23px;
            /*box-shadow: 2px 2px 3px #999;*/
            z-index:100;
            transition: all 1.5s ease;
        }
        .float:hover {
            transform: scale(1.0);
            color:#fff;
        }

        .my-float{
            margin-top:8px;
        }
        .ws-1{
            border-radius:25px;
        }
        .ws-2{
            border-radius:25px;
        }
        .add-to-cart {
            display: inline-block;
            width: auto;
            border: 2px solid #20638f;
            padding: 0.4em 0.6em;
            color: #20638f;
            text-decoration: none;
            font-weight: 800;
            font-size: 0.9em;
            text-transform: uppercase;
            }

    </style>
    <title>ZUKA S.A.C.</title>
</head>
<body>
 
<header>
<nav class="navbar fixed-top navbar-expand-lg navbar bg scrolling-navbar"  style="background-color: #FFFFFF;">

<div class="container">
    <a href="../index.php" class="navbar-brand" style="color: black"> ZUKA S.A.C.</a>

    <button class="navbar-toggler" 
    type="button" data-toggle="collapse" 
    data-target="#navegacion" 
    aria-expanded="false" 
    aria-label="Alternar Menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" 
    id="navegacion">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="../index.php" class="nav-link" style="color: black">Inicio <i class="fa fa-refresh fa-spin fa-fw"></i></a>
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
        
        <a href="../VerCarta.php" class="btn btn-outline-dark ml-lg-5 "><i class="fas fa-shopping-cart"></i> Carrito</a>

        <a href="admin/login.php" class="btn btn-outline-success ml-lg-5 "><i class="fa fa-user" aria-hidden="true"></i> Mi cuenta</a>
    </div>
</div>
</nav>
    </header>