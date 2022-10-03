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