<?php include RUTA_APP . '/views/inc/cabeza.inc.php'?>
    <div class="container">
        <br>
        <div class="controllers">
            <a href="<?php echo RUTA_URL;?>/usuarios" id="volver" class="btn btn-info btn-sm float:right mt-3 mb-6" title="volver"><i class="fa fa fa-backward"></i></a>
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
                            <form action="<?php echo RUTA_URL;?>/usuarios/borrar/<?php echo $datos['id']?>" method="POST">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="rfc">R.F.C</label>
                                            <input type="text" class="form-control" id="rfc", name="rfc" aria-describedby="rfcAyuda" value="<?php echo $datos['rfc']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreAyuda" value="<?php echo $datos['nombre']?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="correo">Correo</label>
                                            <input type="email" class="form-control" id="correo", name="correo" aria-describedby="correoAyuda" value="<?php echo $datos['correo']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telefono">Telefono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono"  value="<?php echo $datos['telefono']?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="direccion">Direccion</label>
                                            <input type="direccion" class="form-control" id="direccion", name="direccion" aria-describedby="DireccionAyuda" value="<?php echo $datos['direccion']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="foto">Fotografica</label>
                                            <img src="data:image/png;base64,<?php echo $datos['foto'];?>" width="30" alt="Foto">
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