<?php include RUTA_APP . '/views/inc/cabeza.inc.php'; ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            
            <div class="card" style="background-color: #0080ff;">
                <div class="card-header"> Editar <i class="fa fa-user text-warning float-right"></i>
                </div>
                <div class="card-body">
                    <form action="<?php echo RUTA_URL;?>/cuentas/editar/<?php echo $datos['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class=" form-group">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" aria-describedby="NombreAyuda" value="<?php echo $datos['Nombre']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class=" form-group">
                                <label for="BalanceInicial">Balance Inicial</label>
                                <input type="text" class="form-control" id="BalanceInicial" name="BalanceInicial" aria-describedby="BalanceInicialAyuda" value="<?php echo $datos['BalanceInicial']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class=" form-group">
                                <label for="fecha">Fecha</label>
                                <input type="text" class="form-control" id="fecha" name="fecha" aria-describedby="fechaAyuda" value="<?php echo $datos['fecha']; ?>" required>
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
                    