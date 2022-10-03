<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../img/logo.ico">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <link rel="stylesheet" href="../css/login2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
        
    </style>
    <title>ZUKA S.A.C.-Login</title>
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
        
        
        <a href="admin/login.php" class="btn btn-outline-success ml-lg-5 "><i class="fa fa-user" aria-hidden="true"></i> Mi cuenta</a>
    </div>
</div>
</nav>
</header>






    
<br>
<br>

<br>


        <div class="container1" id="container1">
            <div class="form-container sign-up-container">
                <form action="#">
                    <h1>Crea una cuenta</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>o use su correo para registrarse</span>
                    <input type="text" name="usuario"placeholder="Nombre de usuario" />
                    <input type="email" name="correo" placeholder="Correo" />
                    <input type="password" name="pass" placeholder="Contraseña" />
                    <button>Registrate</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <h1>Iniciar Sesion</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>o use su cuenta</span>
                    <input type="text" name="usuario" placeholder="Nombre de usuario" />
                    <input type="password" name="pass" placeholder="Contraseña" />
                    <a href="#">Olvidaste tu Contraseña?</a>
                    <button type="submit">Inicia Sesion</button>
                    <!-- <input type="submit" class="btn btn-success enviar mb-3" value="Ingresar"> -->
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenido de nuevo!</h1>
                        <p>Para mantenerte conectado con nosotros por favor ingrese con su informacion personal</p>
                        <button class="ghost" id="signIn">Inicie Sesion</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hola, estimado!</h1>
                        <p>Ingrese sus detalles personales y comience este camino con nosotros</p>
                        <button class="ghost" id="signUp">Registrate</button>
                    </div>
                </div>
            </div>
        </div>


    </body>

    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/login.js"></script>
</body>
</html>