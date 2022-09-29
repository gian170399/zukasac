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