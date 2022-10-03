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
    <title>ZUKA S.A.C. - Faros</title>
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
                            <a href="#"  style="color: black"
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