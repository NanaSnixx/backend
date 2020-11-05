<?php include RUTA_APP . '/views/inc/cabeza.inc.php'; ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">              
                <div class="card aqua">
                    <div class="card-header"> Editar <i class="fa fa-user text-warning float-right"></i></div>
                    <div class="card-body">
                        <form action="<?php echo RUTA_URL;?>/productos/editar/<?php echo $datos['id_prod']; ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class=" form-group">
                                        <label for="nombre_prod">Nombre Producto</label>
                                        <input type="text" class="form-control" id="nombre_prod" name="nombre_prod" aria-describedby="nombre_prodAyuda" value="<?php echo $datos['nombre_prod']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class=" form-group">
                                        <label for="precio">Precio</label>
                                        <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precioAyuda" value="<?php echo $datos['precio']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="foto_prod">Imagen</label>
                                        <input type="file" class="form-control" id="foto_prod" name="foto_prod" required>
                                        Foto
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <button type="reset" class="btn btn-warning btn-block"> limpiar <i class="fa fa-broom text-primary"></i> </button>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success btn-block">Actualizar <i class="fa fa-save"></i></button>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <?php include RUTA_APP . '/views/inc/footer.inc.php'; ?>