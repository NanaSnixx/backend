<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php'; ?>
    
    
    <div class="container">
        <?php if(!isset($_SESSION['usuario'])){ ?>
        
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card" style="background-color: #2574A9;">
                    <div class="card-header"> avisos</div>
                    <div class="card-body">No tiene permisos...... vaya ha acceder </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="<?php echo RUTA_URL;  ?>/auths" >Login</a>
            </div>
        </div>
        <?php } else{?>
        <div class="content-container">
        <h3> <?php echo $datos['titulo'].'<br>Nombre usuario:  '. $datos['usuario']?><img src="data:image/png;base64, <?php echo $datos['foto'] ; ?>" width="100" class="float-right"></h3>
        <p>Puede continuar</p>
        </div>
        
    <?php }?>
    </div>
    <?php
    include RUTA_APP . '/views/inc/footer.inc.php';
    ?>