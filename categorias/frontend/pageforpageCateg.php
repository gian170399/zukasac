<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6  m-auto">
                    <nav aria-label="Page navigation example" class="m-auto" >
                        <ul class="pagination justify-content-center">
                            <!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
                            <?php if($pagina == 1): ?>
                                <li class="page-item disabled mr-2">
                                    <a class="page-link" style="border-radius: 20px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior</a>
                                </li>
                            <?php else: ?>
                                <li><a class="page-link mr-2" style="border-radius: 20px;" href="?pagina=<?php echo $pagina - 1 ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior</a></li>
                            <?php endif; ?>

                            <!-- Ejecutamos un ciclo para mostrar las paginas -->
                            
                            <!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
                            <?php if($pagina == $numeroPaginas): ?>
                                <li class="page-item disabled">
                                    <a class="page-link" style="border-radius: 20px;">Página Siguiente  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </li>
                            <?php else: ?>
                                <li><a class="page-link" style="border-radius: 20px;" href="?pagina=<?php echo $pagina + 1 ?>">Página Siguiente  <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                                <!-- <li class="page-item"> -->
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>