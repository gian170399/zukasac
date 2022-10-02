<nav class="navbar fixed-top navbar-expand-lg navbar bg scrolling-navbar"  style="background-color: #FFFFFF;">

            <div class="container">
                <a href="../../index.php" class="navbar-brand "> ZUKA S.A.C.</a>

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
                            <a href="index.php" class="nav-link">Inicio <i class="fa fa-refresh fa-spin fa-fw"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" 
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
                                <a href="categorias/backend/accesorio.php" class="dropdown-item">Accesorios</a>
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