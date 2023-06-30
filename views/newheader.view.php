
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