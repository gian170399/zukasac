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