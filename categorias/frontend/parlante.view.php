<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"> 


    <link rel="icon" type="image/jpg" href="../../img/logo.ico">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <link rel="stylesheet" href="../../footer/footer.css">
    <link rel="stylesheet" href="../../css/index.css">
    <!-- <link rel="stylesheet" href="../css/navbar.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
        .titulo{
            font-family: 'Bree Serif', serif;   
        }
        .contacto .row .enviar{
            border-radius: 50px;
            padding:15px 20px;
            font-size: 18px;
        }
        .contacto .row .input{
            border-radius: 15px;
        }
        .inner{
            overflow: hidden;
        }
        .inner img{
            transition: all 1.5s ease;
        }
        .inner:hover img{
            transform: scale(1.5);
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
        .precio{
            font-size:17px;
        }

        
    </style>
    <title>ZUKA S.A.C. - Parlante</title>
</head>
   
    
<body>
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar bg scrolling-navbar"  style="background-color: #FFFFFF;">

            <div class="container">
                <a href="../../index.php" class="navbar-brand" style="color: black"> ZUKA S.A.C.</a>

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
                            <a href="../../index.php" class="nav-link" style="color: black">Inicio <i class="fa fa-refresh fa-spin fa-fw"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#../"  style="color: black"
                            class="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            data-toggle="dropdown">
                                Categoria
                            </a>
                            <div class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                                <a href="faro.php" class="dropdown-item">Faros</a>
                                <a href="neblinero.php" class="dropdown-item">Neblineros</a>
                                <!-- <a href="../../categorias/backend/foco.php" class="dropdown-item">Focos</a>
                                <a href="../../categorias/backend/aro.php" class="dropdown-item">Aros</a>
                                <a href="../../categorias/backend/equipo.php" class="dropdown-item">Equipos</a>
                                <a href="../../categorias/backend/parlante.php" class="dropdown-item">Parlantes</a>
                                <a href="categorias/backend/piso.php" class="dropdown-item">Pisos</a>
                                <a href="categorias/backend/asiento.php" class="dropdown-item">Asientos</a>
                                <a href="categorias/backend/sirena.php" class="dropdown-item">Sirenas</a> -->
                                <!-- <a href="categorias/backend/accesorio.php" class="dropdown-item">Accesorios</a> -->
                                <!-- <a href="404/404.php" class="dropdown-item">Accesorios</a> -->
                            </div>
                        </li>
                    </ul>

                    <form action="../../archivos/buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
                        <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
                        <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                    </form>
                    
                    
                    <a href="../../admin/login.php" class="btn btn-outline-success ml-lg-5 "><i class="fa fa-user" aria-hidden="true"></i> Mi cuenta</a>
                </div>
        </div>
    </nav>
 
    
    <div class="contenido" style="background: #fff;">
        <main class="container">
            <div class="row mt-5 pt-4">
                <div class="col">
                    <div class="carousel slide"
                    id="slideshowcat" data-ride="carousel">
                        <!-- Indicadores -->
                        <ol class="carousel-indicators">
                            <li data-target="#slideshowcat"
                            data-slide-to="0" class="active"></li>
                            <li data-target="#slideshowcat"
                            data-slide-to="1"></li>
                            <li data-target="#slideshowcat"
                            data-slide-to="2"></li>
                        </ol>
                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../img/zuka3.jpg" 
                                class="d-block w-100" alt=""> 
                            </div>
                            <div class="carousel-item">
                                <img src="../img/transmisionysuspension.jpg"
                                class="d-block w-100"  alt=""> 
                            </div>
                            <div class="carousel-item">
                                <img src="../../img/frenoyembrage.jpg" 
                                class="d-block w-100"  alt=""> 
                            </div>
                        </div>
                        <!-- Controladores -->
                        <a href="#slideshowprev" class="carousel-control-prev" 
                        data-slide="prev">
                            <span class="carousel-control-prev-icon"
                            aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a href="#slideshownext" class="carousel-control-next" 
                        data-slide="next">
                            <span class="carousel-control-next-icon"
                            aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="py-4 border-bottom">
                        
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faros</li>
                        </ol>
                    </nav>
                        <h2 class="m-auto"><?php echo $titulo?></h2>
                        <!-- <h1 class="text-center">Productos</h1> -->
                    </div>
                </div>
            </div>

            <!-- NUEVO CARD -->
            <div class="row py-4 " width="50px">
                    <?php foreach($resultado_sala as $foto): ?>
                        <figure class="snip1249">
                            <a href="../../archivos/single.php?idProducto=<?php echo $foto['idProducto']; ?>">
                            <section class="image" id="imagenFav">
                                <img src="../../fotos/<?php echo $foto['imagen'];?>" alt="sample90"/><i class="fa fa-heart-o" aria-hidden="true"></i></i>
                            </section>
                            </a>
                            <figcaption>
                                <h5><?php echo $foto['titulo']?></h5>
                                <p><?php echo $foto['breveDesc']?></p>
                                <div class="price">
                                S/ <?php echo $foto['precio'];?>
                                </div>
                                <a href="../../archivos/single.php?idProducto=<?php echo $foto['idProducto'];?>" class="add-to-cart">Agregar al carrito</a>
                            </figcaption>
                        </figure>
                        <?php endforeach; ?>
                
                </div>
                
            <!-- NUEVO CARD -->
            
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6  m-auto">
                    <nav aria-label="Page navigation example" class="m-auto" >
                        <ul class="pagination justify-content-center">
                            <!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
                            <?php if($pagina == 1): ?>
                                <li class="page-item disabled mr-2">
                                    <a class="page-link" style="border-radius: 20px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior</a>
                                </li>
                            <?php else: ?>
                                <li><a class="page-link mr-2" style="border-radius: 20px;" href="?pagina=<?php echo $pagina - 1 ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior</a></li>
                            <?php endif; ?>

                            <!-- Ejecutamos un ciclo para mostrar las paginas -->
                            
                            <!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
                            <?php if($pagina == $numeroPaginas): ?>
                                <li class="page-item disabled">
                                    <a class="page-link" style="border-radius: 20px;">Página Siguiente  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </li>
                            <?php else: ?>
                                <li><a class="page-link" style="border-radius: 20px;" href="?pagina=<?php echo $pagina + 1 ?>">Página Siguiente  <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                                <!-- <li class="page-item"> -->
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>

   

    

    

    <!-- Logo de whatsapp flotante-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20me%20podria%20ayudar?%20,tengo%20una%20consulta." class="float" target="_blank">
    <i class="fa fa-whatsapp fa-2x my-float"></i>
    </a>
    
    
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
            logged_in_greeting="Hola! En qué podemos ayudarte?"
            logged_out_greeting="Hola! En qué podemos ayudarte?">
            </div>
    </div>
    
    <?php include '../../footer/footer.view.php'?>      
    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

    
</body>
</html>