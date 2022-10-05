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
    <link rel="stylesheet" href="../css/infoStyle.css">
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
    <br>
    <div class="single" style="background: url('/img/fondo.png'), #fff;">
        <div class="container mt-5 pt-4">
        <br>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Información del producto</li>
                        </ol>
                    </nav>

                    <div class="containerInfo">
                        <div class="row">
                            <div class="col bg1">
                            <img src="../fotos/<?php echo $foto['imagen'];?>" alt="Responsive image" class="img1">
                            </div>
                            <div class="col bg2">
                            <div class="row row1">
                                <h1><?php if(!empty($foto['titulo'])){
                                echo $foto['titulo'];
                                }else{
                                    echo "sin titulo";
                                } ?></h1>
                            </div>
                                <div class="row row2">
                                    <h2>Descripción</h2>
                                    <p class="details"><?php echo nl2br($foto['descripcion']);?></p>
                                </div>
                                <div class="row align-items-end row3">
                                    <a href='#'><button type="button" class="btn btn-primary">Agregar al carrito</button></a>
                                    <!-- <a href='#'><button type="button" class="btn btn-primary">Buy Now!</button></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
            
        </div>
    </div>

   <br>
    
    
    
    
    <!-- Load Facebook SDK for JavaScript -->
    <div class="fei">
      <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v7.0'
              });
            };
    
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
    
          <!-- Your customer chat code -->
            <div class="fb-customerchat"
            attribution=setup_tool
            page_id="2006071546273734"
            theme_color="#0084ff"
            logged_in_greeting="Hola! Desea comprar este mueble?"
            logged_out_greeting="Hola! Desea comprar este mueble?">
            </div>
    </div>
    
    <?php include '../footer/footer.view.php'?>
    
         
    
    
    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>