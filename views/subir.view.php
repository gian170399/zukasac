<!DOCTYPE html>
<html lang="en">
<head><meta charset="gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../img/logo.ico">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
     .titulo{
            font-family: 'Bree Serif', serif;   
        }
    </style>
    <title>Muebleria G & M-Subir Archivos</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar"  style="background-color: #0a2e36;">
            <div class="container">
                <a href="../index.php" class="navbar-brand titulo"> Mueblería G & M  (E.I.R.L.)</a>

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
                            <a href="../index.php" class="nav-link">Inicio<i class="fa fa-refresh fa-spin fa-fw"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="../index.php" 
                            class="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            data-toggle="dropdown">
                                Productos
                            </a>
                            <div class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                                <a href="../productos/sala.php" class="dropdown-item">Muebles para sala</a>
                                <a href="../productos/departamento.php" class="dropdown-item">Muebles para departamento</a>
                                <a href="../productos/mini_departamento.php" class="dropdown-item">Muebles para mini departamento</a>
                                <a href="../productos/comedores.php" class="dropdown-item">Comedores</a>
                            </div>
                        </li>
                    </ul>

                    <form action="../buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
                        <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
                        <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                    </form>

                    <a href="../admin/cerrar.php" class="btn btn-warning ml-lg-5 "><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesion</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="subir" style="background: url('../img/fondo_horario.png'), #fff;">
        <div class="container">
            <div class="row mt-5 pt-4">
                    <div class="col">
                        <div class="py-2 m-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>Iniciar Sesión</a></li>
                                    <li class="breadcrumb-item"><a href="modificar.php">Modificar Productos</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Publicar producto</li>
                                </ol>
                            </nav>
                            <h1 class="text-center">Publicar producto</h1>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 m-auto">
                    <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        
                        <label for="foto">Seleciona tu foto:</label>
                        <input type="file" name="foto" id="foto" class="">

                        <label for="titulo">Titulo del producto:</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>

                        <label for="extracto">Extracto del producto:</label>
                        <textarea name="extracto" name="breveDesc" id="extracto" placeholder="Ingresa una breve descripcion" class="form-control" required></textarea>
                        
                        <label for="categoria">Categoria:</label>
                        <select name="categoria" id="categoria" class="form-control mb-2" required>
                            <option value="sala">Muebles para sala</option>
                            <option value="departamento">Muebles para departamento</option>
                            <option value="mini_departamento">Muebles para mini departamento</option>
                            <option value="comedores">Comedores</option>
                        </select>

                        <label for="texto">Descripcion:</label>
                        <textarea class="form-control mb-2" name="descripcion" id="texto" placeholder="Ingresa una descripcion de la imagen" required></textarea>

                        <!-- <label for="precio">Precio:</label>
                        <i class="fa fa-money-bill-alt"></i><input type="text" name="precio" id="precio" class="form-control mb-2" placeholder="Precio"> -->

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- <label for="precio">Precio:</label> -->
                                <span class="input-group-text mb-3"><i>S/.</i></span>
                            </div>
                            <input type="text" name="precio" id="precio" class="form-control mb-3" placeholder="Precio" required>
                        </div>

                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="error"><?php echo $error; ?></p>
                            </div>
                        <?php elseif(isset($subido)): ?>
                            <div class="alert alert-success" role="alert">
                                <p class="error"><?php echo $subido; ?></p>
                            </div>
                        <?php endif; ?>

                        <input class="btn btn-secondary mb-4" type="submit" value="Publicar">

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