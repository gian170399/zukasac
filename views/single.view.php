    <?php include '../views/newheader.view.php'?>
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
                    <a href="../AccionCarta.php?action=addToCart&idProducto=<?php echo $foto['idProducto'];?>" class="add-to-cart">Agregar al carrito</a>
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