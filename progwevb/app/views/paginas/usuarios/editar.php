<?php include RUTA_APP . '/views/inc/cabeza.inc.php'; ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            
            <div class="card aqua">
                <div class="card-header"> Editar <i class="fa fa-user text-warning float-right"></i>
                </div>
                <div class="card-body">
                    <form action="<?php echo RUTA_URL;?>/usuarios/editar/<?php echo $datos['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class=" form-group">
                                <label for="rfc">R.F.C</label>
                                <input type="text" class="form-control" id="rfc" name="rfc" aria-describedby="rfceAyuda" value="<?php echo $datos['rfc']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class=" form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreAyuda" value="<?php echo $datos['nombre']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class=" form-group">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" aria-describedby="correoAyuda" value="<?php echo $datos['correo']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $datos['telefono']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class=" form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordAyuda" required>
                            </div>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password">Conf. password</label>
                            <input type="password" class="form-control" id="password" name="cpassword" required>
                        </div>
                    </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-6">
                            <div class=" form-group">
                                <label for="correo">Dirección</label>
                                <input type="direccion" class="form-control" id="direccion" name="direccion" aria-describedby="direccionAyuda" value="<?php echo $datos['direccion']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="foto">Fotografia</label>
                                <input type="file" class="form-control" id="foto" name="foto" required>
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
    <?php include RUTA_APP . '/views/inc/footer.inc.php'; ?>
                    