<?php include RUTA_APP . '/views/inc/cabeza.inc.php'?>
    <div class="container">
        <br>
        <div class="controllers">
            <a href="<?php echo RUTA_URL;?>/productos" id="volver" class="btn btn-info btn-sm float:right mt-3 mb-6" title="volver"><i class="fa fa fa-backward"></i></a>
        </div>
        <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card bg-warning">
                        <div class="card-header">
                            Confirmacion de borrar <i class="fa fa-user-minus text-danger float:right"></i>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo RUTA_URL;?>/productos/borrar/<?php echo $datos['id_prod']?>" method="POST">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nombre_prod">Nombre Producto</label>
                                            <input type="text" class="form-control" id="nombre_prod", name="nombre_prod" aria-describedby="nombre_prodAyuda" value="<?php echo $datos['nombre_prod']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="precio">Precio</label>
                                            <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precioAyuda" value="<?php echo $datos['precio']?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="foto_prod">Imagen</label>
                                            <img src="data:image/png;base64,<?php echo $datos['foto_prod'];?>" width="30" alt="Foto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-danger btn-block">Borrar <i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
    </div>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>