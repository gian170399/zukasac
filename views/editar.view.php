<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../img/logo.ico">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
         .titulo{
            font-family: 'Bree Serif', serif;   
        }
    </style>
    <title>Muebleria G & M-Editar Archivos</title>
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

    <div class="subir" style="background: url('img/fondo_horario.png'), #fff;">
        <div class="container">
            <div class="row mt-5 pt-4">
                    <div class="col">
                        <div class="py-2 m-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>Iniciar Sesión</a></li>
                                    <li class="breadcrumb-item"><a href="modificar.php">Modificar Productos</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar producto</li>
                                </ol>
                            </nav>
                            <h1 class="text-center">Editar producto</h1>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 m-auto">
                    <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        
                        <input type="hidden" name="idProducto" value="<?php echo $post['idProducto']; ?>">

                       
                        <label for="foto">Seleciona tu foto:</label>
                        <input type="file" name="imagen" id="foto">
					    <input type="hidden" name="imagen-guardada" value="<?php echo $post['imagen']; ?>">
                        <?php if(empty($imagen['name'])){?>
                            <img class="img-thumbnail mx-auto d-block" width="100px" height="100px" src="../fotos/<?php echo $post['imagen'];?>" alt="">
                        <?php }else{?>
                            <img class="img-thumbnail mx-auto d-block" width="100px" height="100px" src="<?php echo $post['imagen']['tmp_name'];?>" alt="">
                        <?php }?>
                        

                        <label for="titulo">Titulo del artículo:</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $post['titulo'] ?>">

                        <!-- <label for="breveDesc">breveDesc del artículo:</label>
                        <textarea name="breveDesc" name="breveDesc" id="breveDesc" placeholder="Ingresa una breveDesc" class="form-control" ><?php echo $post['breveDesc']; ?></textarea> -->
                        
                        <label for="categoria">Categoria:</label>
                        <select name="categoria" id="categoria" class="form-control mb-2">
                            <option value="Faro">Faros</option>
                            <option value="Neblinero">Neblineros</option>
                            <option value="Foco">Focos</option>
                            <option value="Piso">Pisos</option>
                            <option value="Sirena">Sirenas</option>
                            <option value="Asiento">Asientos</option>
                            <option value="Aro">Aros</option>
                            <option value="Equipo">Equipos</option>
                            <option value="Aceesorio">Aceesorios</option>
                        </select>
                            
                        <label for="texto">Descripcion:</label>
                        <textarea class="form-control mb-2" name="descripcion" id="texto" placeholder="Ingresa una descripcion de la imagen"><?php echo $post['descripcion'];?></textarea>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- <label for="precio">Precio:</label> -->
                                <span class="input-group-text mb-3"><i>S/.</i></span>
                            </div>
                            <input type="text" name="precio" id="precio" class="form-control mb-3" placeholder="Precio" value="<?php echo $post['precio']?>">
                        </div>

                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="error"><?php echo $error; ?></p>
                            </div>
                        <?php endif; ?>
                        <input class="btn btn-secondary mb-4" type="submit" value="Editar">
                    </form>
                </div>
            </div>
        </div>
    </div>




    

    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</body>
</html>