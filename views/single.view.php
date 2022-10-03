<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="../img/logo.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
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

    </style>
    <title>Mueblería GYM</title>
</head>
<body>
<header>
        <nav class="navbar fixed-top navbar-expand-xl navbar bg scrolling-navbar"  style="background-color: #FFFFFF;">

            <div class="container">
                <a href="../index.php" class="navbar-brand titulo"> Mueblería Gian  (E.I.R.L.)</a>

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
                            <a href="../index.php" class="nav-link">Inicio <i class="fa fa-refresh fa-spin fa-fw"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" 
                            class="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            data-toggle="dropdown">
                                Productos
                            </a>
                            <div class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                                <a href="productos/sala.php" class="dropdown-item">Muebles para sala</a>
                                <a href="productos/departamento.php" class="dropdown-item">Muebles para departamento</a>
                                <a href="productos/mini_departamento.php" class="dropdown-item">Muebles para mini departamento</a>
                                <a href="productos/comedores.php" class="dropdown-item">Comedores</a>
                            </div>
                        </li>
                    </ul>

                    <form action="archivos/buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
                        <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
                        <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                    </form>
                    
                    
                    <a href="admin/login.php" class="btn btn-success ml-lg-5 "><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesión</a>
                    
                </div>
            </div>
        </nav>
    </header>




    <div class="single" style="background: url('../img/fondo.png'), #fff;">
        <div class="container mt-5 pt-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Información del producto</li>
                        </ol>
                    </nav>
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
                </div>

                <!-- <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a> -->
            </div>
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