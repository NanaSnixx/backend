<?php
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<div class="container">
<?php if(!isset($_SESSION['usuario'])) {?>
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

        <div class="container">
            <h1>Cuentas</h1>
        </div>
        <div class="container border border-primary d-inline-flex">
        
        <div class="controllers">
            <a href="<?php echo RUTA_URL; ?>/cuentas/agregar" id="agregar" class="btn btn-info btn-sm float-right">Agregar<i class="fa fa-plus"></i></a>
        </div>


<table class="table">
    <thead>
        <tr>
            <td colspan="7"></td>
            <td>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a CSV" id="csv"><i class="fa fa-file-csv"></i></button>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a XML" id="xml"><i class="fa fa-file-code"></i></button>
                <button type="button"class="btn btn-info btn-sm" title="Exportar a JSON" id="json"><i class="fa fa-file-export"></i></button>
            <a href="<?php echo RUTA_URL;?>/usuarios/toPdf" target="_blank" class="btn btn-info btn-sm" title="Exportar a PDF" id="pdf"><i class="fa fa-file-pdf"></i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Balance Inicial</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datos['cuentas'] as $cuentas): /*$foto=base64_encode($usuario['foto'])*/;?>
        
        <tr>
            <td><?php echo $cuentas['id']; ?></td>
            <td><?php echo $cuentas['Nombre']; ?></td>
            <td><?php echo $cuentas['BalanceInicial']; ?></td>
            <td><?php echo $cuentas['fecha']; ?></td>
            <td><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL; ?>/cuentas/editar/<?php echo $cuentas['id']; ?>"><i class="fa fa-edit"></i></a>
            &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL; ?>/cuentas/borrar/<?php echo $cuentas['id']; ?>"><i class="fa fa-times"></i></a></td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<?php }?>
</div>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>
<script>
    $(function(){
        
        
        $('#csv').on('click', function(){   
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL ;?>/usuarios/toCsv",
                dataType:'json',
                success: function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
        $('#xml').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/usuarios/toXml",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
         $('#json').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/usuarios/toJson",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
         
         
        $('#pdf').on('click', function(){
           
         $.ajax({
             type:'GET',
            url:"<?php echo RUTA_URL;?>/usuarios/toPdf",
            dataType:'json',
               success:function(respuesta){
                if(respuesta.hecho){
                      alert('Archivo creado con exito');
                   }
              },
             error:function(e){
                    console.log(e.responseText);
                }
               });
            });         
        });
</script>